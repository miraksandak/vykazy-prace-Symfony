# vykazy-prace-Symfony
Aplikace pro zapisování odpracovaných hodin.

## Rychlý start

Pro rychlý start systému, spusťte tuto sekvenci příkazů:

```
bin/docker configure
bin/docker up
bin/docker initialize
```

Aplikace se potom rozběhne na portu, který jste zadali v konfigurační části. Pokud jste ponechali základní port 80, budete mít aplikaci
k dispozici na adrese:

```
http://localhost
```

Pokud jste zadali jiné číslo portu, bude aplikace dostupná na adrese:

```
http://localhost:<port>
```

## Konfigurace prostředí

Prostředí se konfiguruje příkazem

```
bin/docker configure
```

Po spuštění příkazu budete dotázáni na různé otázky.  V základním prostředí se nastavuje pouze číslo portu, na kterém bude webová aplikace poslouchat.

Prostředí stačí nakonfigurovat jednou před prvním spuštěním. V případě, nutnosti prostředí rekonfigurovat, je potřeba následně restartovat docker kontejnery pomocí dvojice příkazů `bin/docker restart`.

## Spuštění a vypnutí kontejnerů

Kontejnery spustíte příkazem:
```
bin/docker up
```
A zastavíte je příkazem:
```
bin/docker down
```
Popřípadě je můžete "odstřelit" příkazem:
```
bin/docker kill
```

Chcete-li kontejnery restartovat (tj. vypnout a zapnout), můžete použít příkaz:
```
bin/docker restart
```

Běh kontejnerů je nutný, aby celá webová aplikace fungovala. Kontejnery obsahují veškerý software jako php procesor, popřípadě webový server.

## Inicializace aplikace

Aplikaci inicializujete příkazem:
```
bin/docker initialize
```
Význam tohoto kroku je připravit aplikaci k běhu systému. Systém je vytvořen tak, aby se do systému daly snadno přidávat nové inicializační kroky.

Inicializaci je potřeba také provést pouze jednou, ale v případě některých změn může být potřeba aplikaci reinicializovat. Zejména jde například o změnu závislostí v souboru `composer.json`.
