<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Repository\WorkRecordRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends AbstractController
{
/**
 * @Route("/admin", name="admin")
 */
public function adminView(Request $request, UserRepository $userRepository, WorkRecordRepository $workRecordRepository)
{
    $filter = $request->query->get('filter');
    $users = $userRepository->findAll();
    $workRecords = [];

    if ($filter === 'last_month') {
        $startDate = new \DateTime('first day of last month');
        foreach ($users as $user) {
            $workRecords[$user->getId()] = $workRecordRepository->findRecordsInDateRange($user, $startDate);
        }
    } elseif ($filter === 'last_week') {
        $startDate = new \DateTime('first day of last week');
        foreach ($users as $user) {
            $workRecords[$user->getId()] = $workRecordRepository->findRecordsInDateRange($user, $startDate);
        }
    }elseif ($filter === 'last_year') {
        $startDate = new \DateTime('first day of last year');
        foreach ($users as $user) {
            $workRecords[$user->getId()] = $workRecordRepository->findRecordsInDateRange($user, $startDate);
        }
    } else {
        foreach ($users as $user) {
            $workRecords[$user->getId()] = $workRecordRepository->findBy(['user' => $user]);
        }
    }

    return $this->render(
        'admin-view.html.twig',
        [
            'users' => $users,
            'workRecords' => $workRecords,
            'selectedFilter' => $filter,
        ]
    );
}

    /**
     * @Route("/admin/user/{id}", name="admin_user")
     */
    public function adminUserView(Request $request, UserRepository $userRepository, WorkRecordRepository $workRecordRepository, $id)
    {
        $user = $this->getUser();
        $cutoffDate = new \DateTime('-1 month');
        if (!in_array('ROLE_ADMIN', $user->getRoles())) {
            throw $this->createAccessDeniedException('Access Denied');
        }

        $user = $userRepository->find($id);
        $workRecords = $workRecordRepository->findByUser($user);
        $lastMonth = new \DateTime('-1 month');
        $lastYear = new \DateTime('-1 year');
        $lastWeek = new \DateTime('-7 days');

        $filter = $request->query->get('filter');
        $departmentFilter = $request->query->get('department');
    
        $showAllDepartments = $departmentFilter === 'all' || $departmentFilter === null;
    
        if ($filter === 'last_month') {
            $workRecords = $workRecordRepository->findRecordsInDateRange($user, $lastMonth, $showAllDepartments ? null : $departmentFilter);
        } elseif ($filter === 'last_week') {
            $workRecords = $workRecordRepository->findRecordsInDateRange($user, $lastWeek, $showAllDepartments ? null : $departmentFilter);
        } elseif ($filter === 'last_year') {
            $workRecords = $workRecordRepository->findRecordsInDateRange($user, $lastYear, $showAllDepartments ? null : $departmentFilter);
        } else {
            if ($showAllDepartments) {
                $workRecords = $workRecordRepository->findBy(
                    ['user' => $user],
                    ['startTime' => 'DESC']
                );
            } else {
                $workRecords = $workRecordRepository->findBy(
                    ['user' => $user, 'department' => $departmentFilter],
                    ['startTime' => 'DESC']
                );
            }
        }

        return $this->render('admin-user-view.html.twig', [
            'user' => $user,
            'workRecords' => $workRecords,
            'lastMonth' => $lastMonth,
            'lastYear' => $lastYear,
        ]);
    }

        /**
     * @Route("/export-csv", name="export_csv")
     */
    public function exportCsv(WorkRecordRepository $workRecordRepository): Response
    {
        $user = $this->getUser();
        $workRecords = $workRecordRepository->findBy(
            ['user' => $user],
            ['startTime' => 'DESC']
        );

        $csvData = [];
        $csvData[] = ['Start Time', 'Duration', 'Department', 'Type of Work', 'Description'];

        foreach ($workRecords as $workRecord) {
            $csvData[] = [
                $workRecord->getStartTime()->format('d-m-Y H:i:s'),
                $workRecord->getDuration(),
                $workRecord->getDepartment(),
                $workRecord->getTypeOfWork(),
                $workRecord->getDescription(),
            ];
        }

        $response = new Response($this->arrayToCsv($csvData));
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="work_records.csv"');

        return $response;
    }

    /**
     * Convert a 2D array to a CSV string
     *
     * @param array $data
     * @param string $delimiter
     * @param string $enclosure
     * @param string $escapeChar
     * @return string
     */

    private function arrayToCsv(
        array $data,
        string $delimiter = ',',
        string $enclosure = '"',
        string $escapeChar = '\\'
    ): string {
        $output = '';
        $stream = fopen('php://temp', 'r+');

        foreach ($data as $row) {
            fputcsv($stream, $row, $delimiter, $enclosure, $escapeChar);
        }

        rewind($stream);
        while (($csvRow = fgets($stream)) !== false) {
            $output .= $csvRow;
        }

        fclose($stream);

        return $output;
    }

    /**
     * @Route("/access-denied", name="access_denied")
     */
    public function accessDenied()
    {
        return $this->render('access_denied.html.twig');
    }
}
