
<?php

// 1. Membuat Interface
interface PaymentInterface {
    public function pay(int $amount);
    public function checkStatus(): string;
}

// 2. Class OVO Payment
class OvoPayment implements PaymentInterface {
    public function pay(int $amount) {
        echo "Membayar Rp. {$amount} menggunakan OVO.\n";
    }

    public function checkStatus(): string {
        return "OVO: Pembayaran Berhasil";
    }
}

// 3. Class Bank Transfer
class BankTransfer implements PaymentInterface {
    public function pay(int $amount) {
        echo "Mentransfer Rp. {$amount} melalui Bank BCA.\n";
    }

    public function checkStatus(): string {
        return "Bank: Menunggu Konfirmasi";
    }
}

// Eksekusi Program
$pembayaran1 = new OvoPayment();
$pembayaran1->pay(50000);

$pembayaran2 = new BankTransfer();
$pembayaran2->pay(150000);

?>
