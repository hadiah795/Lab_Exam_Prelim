<?php 

class atm{
    private $balance;

    public function __contruct($amount){
        $this->balance = $amount;
    }

    public function checkBalance(){
        echo "Your current balance is: $this->balance \n";
    }
    
    public function deposit($amount){
        if ($amount<0){
            echo "Invalid amount \n";
        }
        else{
            $this ->balance+= $amount;
            echo "Your new balance: $this->balance\n";
        }
    }
    
    public function withdraw($amount){
        if($amount>$this->balance){
            echo "Insufficient Balance \n";
        }
        else{
            $this->balance -= $amount;
            echo "Your new balance: $this->balance\n";
        }
        
    }


}
$atm = new atm(0);
$isRunning = true;

while($isRunning){
    echo "1. Check Balance. \n";
    echo "2. Deposit. \n";
    echo "3. Withdraw. \n";
    echo "4. Exit. \n";

    $choice = readline("Enter your choice: ");
    
    if($choice == 1){
        $atm->checkBalance();
    }
    elseif($choice == 2){
        $amount = readline("Enter the amount to deposit: \n");
        $atm->deposit($amount);
    }
    elseif($choice == 3){
        $amount = readline("Enter the amount to withdraw: ");
        $atm->withdraw($amount);
    }
    elseif($choice == 4){
        $isRunning = false;
        echo "Thank you for using our ATM\n";
    }
    else{
        echo "Invalid choice\n";
    }
}


?>
