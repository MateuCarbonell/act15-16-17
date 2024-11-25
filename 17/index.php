<?php
// Trait WiFi
trait WiFi {
    private bool $wifiConnect = false; // Atributo específic del WiFi

    // Mètode per connectar el WiFi
    public function connectWiFi(string $dispositiu): string {
        $this->wifiConnect = true;
        return "WiFi connectat a '$dispositiu'. Estat: " . ($this->wifiConnect ? "Actiu" : "Inactiu");
    }

    // Mètode per desconnectar el WiFi
    public function disconnectWiFi(string $dispositiu): string {
        $this->wifiConnect = false;
        return "WiFi desconnectat de '$dispositiu'. Estat: " . ($this->wifiConnect ? "Actiu" : "Inactiu");
    }
}

// Trait Bluetooth
trait Bluetooth {
    private bool $bluetoothConnect = false; // Atributo específic del Bluetooth

    // Mètode per connectar el Bluetooth
    public function connectBluetooth(string $dispositiu): string {
        $this->bluetoothConnect = true;
        return "Bluetooth connectat a '$dispositiu'. Estat: " . ($this->bluetoothConnect ? "Actiu" : "Inactiu");
    }

    // Mètode per desconnectar el Bluetooth
    public function disconnectBluetooth(string $dispositiu): string {
        $this->bluetoothConnect = false;
        return "Bluetooth desconnectat de '$dispositiu'. Estat: " . ($this->bluetoothConnect ? "Actiu" : "Inactiu");
    }
}

// Classe Dispositiu
class Dispositiu {
    private string $nom; // Nom del dispositiu

    // Constructor per inicialitzar el nom
    public function __construct(string $nom) {
        $this->nom = $nom;
    }

    // Mètode per mostrar el nom del dispositiu
    public function mostraNom(): string {
        return "Nom del dispositiu: $this->nom";
    }

    // Incloure els traits
    use WiFi, Bluetooth;
}

// Exemple d'ús
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
