<?php
require_once 'db.php';

class QnA {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function zobrazOtazkyAOdpovede() {
        $sql = "SELECT otazka, odpoved FROM qna";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $vysledky = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($vysledky as $riadok) {
            echo '<div class="accordion">';
            echo '<div class="question">' . htmlspecialchars($riadok['otazka']) . '</div>';
            echo '<div class="answer">' . htmlspecialchars($riadok['odpoved']) . '</div>';
            echo '</div>';
        }
    }
}
?>
