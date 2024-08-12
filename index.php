<?php

class Company {
    public $name;
    public $location;
    public $tot_employees;

    private static $total_expenses = 0; // Variabile statica per la spesa totale

    public function __construct($name, $location, $tot_employees = 0) {
        $this->name = $name;
        $this->location = $location;
        $this->tot_employees = $tot_employees;
    }

    public function print_info() {
        if ($this->tot_employees > 0) {
            echo "L’ufficio " . $this->name . " con sede in " . $this->location . " ha ben " . $this->tot_employees . " dipendenti.\n";
        } else {
            echo "L’ufficio " . $this->name . " con sede in " . $this->location . " non ha dipendenti.\n";
        }
    }

    public function calculate_expenses($expense_per_employee) {
        $annual_expense = $this->tot_employees * $expense_per_employee;
        self::$total_expenses += $annual_expense; // Aggiungi spesa totale
        return $annual_expense;
    }

    public static function get_total_expenses() {
        return self::$total_expenses;
    }

    public static function print_total_expenses() {
        echo "La spesa totale di tutte le aziende è: " . self::$total_expenses . " euro.\n";
    }
}

// Creazione di istanze di Company
$company1 = new Company("Aulab", "Italia", 50);
$company2 = new Company("TechCorp", "Stati Uniti", 0);
$company3 = new Company("Innovatech", "Germania", 100);
$company4 = new Company("SoftSolutions", "Francia", 20);
$company5 = new Company("WebDesign", "Spagna", 0);

// Stampa delle informazioni delle aziende
$company1->print_info();
$company2->print_info();
$company3->print_info();
$company4->print_info();
$company5->print_info();

// Calcolo e stampa delle spese annuali
$expense_per_employee = 20000; // Esempio di spesa annuale per dipendente
echo "Spese annuali:\n";
echo $company1->calculate_expenses($expense_per_employee) . " euro
";
echo $company2->calculate_expenses($expense_per_employee) . " euro
";
echo $company3->calculate_expenses($expense_per_employee) . " euro
";
echo $company4->calculate_expenses($expense_per_employee) . " euro
";
echo $company5->calculate_expenses($expense_per_employee) . " euro
";

// Stampa della spesa totale di tutte le aziende
Company::print_total_expenses();

?>