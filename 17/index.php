<?php
trait WiFi {
    private bool $wifiConnect = false; 

    public function connectWiFi(string $dispositiu): string {
        $this->wifiConnect = true;
        return "WiFi connectat a '$dispositiu'. Estat: " . ($this->wifiConnect ? "Actiu" : "Inactiu");
    }

    public function disconnectWiFi(string $dispositiu): string {
        $this->wifiConnect = false;
        return "WiFi desconnectat de '$dispositiu'. Estat: " . ($this->wifiConnect ? "Actiu" : "Inactiu");
    }
}

trait Bluetooth {
    private bool $bluetoothConnect = false; 

    public function connectBluetooth(string $dispositiu): string {
        $this->bluetoothConnect = true;
        return "Bluetooth connectat a '$dispositiu'. Estat: " . ($this->bluetoothConnect ? "Actiu" : "Inactiu");
    }

    public function disconnectBluetooth(string $dispositiu): string {
        $this->bluetoothConnect = false;
        return "Bluetooth desconnectat de '$dispositiu'. Estat: " . ($this->bluetoothConnect ? "Actiu" : "Inactiu");
    }
}

class Dispositiu {
    private string $nom; 

    public function __construct(string $nom) {
        $this->nom = $nom;
    }

    public function mostraNom(): string {
        return "Nom del dispositiu: $this->nom";
    }

    use WiFi, Bluetooth;
}

$dispositiu = new Dispositiu("Telèfon Intel·ligent");

// Mostrar el nom del dispositiu
echo $dispositiu->mostraNom() . "<br>";

// Connectar WiFi
echo $dispositiu->connectWiFi("Telèfon Intel·ligent"). "<br>";

// Desconnectar WiFi
echo $dispositiu->disconnectWiFi("Telèfon Intel·ligent"). "<br>";

// Connectar Bluetooth
echo $dispositiu->connectBluetooth("Telèfon Intel·ligent"). "<br>";

// Desconnectar Bluetooth
echo $dispositiu->disconnectBluetooth("Telèfon Intel·ligent"). "<br>";
?>
