<?php

namespace App\Controller;

use App\Entity\WorkRecord;
use App\Repository\WorkRecordRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OverviewController extends AbstractController
{
    /**
     * @Route("/", name="overview")
     */
    public function index(Request $request, WorkRecordRepository $workRecordRepository): Response
    {
        $user = $this->getUser();
        $lastMonth = new \DateTime('-1 month');
        $lastYear = new \DateTime('-1 year');
        $lastWeek = new \DateTime('-7 days');
        $all = new \DateTime('-5 year');

        $filter = $request->query->get('filter');
        if ($filter === 'last_month') {
            $workRecords = $workRecordRepository->findRecordsInDateRange($user, $lastMonth);
        }elseif($filter === 'last_week'){
            $workRecords = $workRecordRepository->findRecordsInDateRange($user, $lastWeek);
        }elseif($filter === 'all'){
            $workRecords = $workRecordRepository->findRecordsInDateRange($user, $all);
        } elseif ($filter === 'last_year') {
            $workRecords = $workRecordRepository->findRecordsInDateRange($user, $lastYear);
        } else {
            $workRecords = $workRecordRepository->findBy(
                ['user' => $user],
                ['startTime' => 'DESC']
            );
        }

        return $this->render('overview.html.twig', [
            'user' => $user,
            'workRecords' => $workRecords,
            'lastMonth' => $lastMonth,
            'lastYear' => $lastYear,
            'all' => $all,
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
        $response->headers->set('Content-Disposition', 'attachment; filename="vykaz-prace.csv"');

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
}
