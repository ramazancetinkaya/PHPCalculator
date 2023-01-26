<?php

class Calculator {
    private float $result; // store the result of the calculation

    // Add two numbers
    public function add(float $a, float $b): float {
        $this->result = $a + $b;
        return $this->result;
    }

    // Subtract two numbers
    public function subtract(float $a, float $b): float {
        $this->result = $a - $b;
        return $this->result;
    }

    // Multiply two numbers
    public function multiply(float $a, float $b): float {
        $this->result = $a * $b;
        return $this->result;
    }

    // Divide two numbers
    public function divide(float $a, float $b): float {
        if ($b == 0) {
            throw new Exception("Cannot divide by zero");
        }
        $this->result = $a / $b;
        return $this->result;
    }

    //square function 
    public function square(float $a): float {
        $this->result = pow($a, 2);
        return $this->result;
    }
    //square root function 
    public function squareRoot(float $a): float {
        if ($a < 0) {
            throw new Exception("Cannot calculate square root of negative number");
        }
        $this->result = sqrt($a);
        return $this->result;
    }

    //power function
    public function power(float $base, int $exponent): float {
        $this->result = pow($base, $exponent);
        return $this->result;
    }

    //mod function
    public function mod(float $a, float $b): float {
        $this->result = fmod($a, $b);
        return $this->result;
    }

    //trigonometric functions
    public function sin(float $a): float {
        $this->result = sin($a);
        return $this->result;
    }
    public function cos(float $a): float {
        $this->result = cos($a);
        return $this->result;
    }
    public function tan(float $a): float {
        $this->result = tan($a);
        return $this->result;
    }

    //logarithmic functions
    public function logarithm(float $a, int $base): float {
        if ($base <= 0) {
            throw new Exception("Invalid base for logarithm");
        }
        $this->result = log($a, $base);
        return $this->result;
    }
    public function naturalLogarithm(float $a): float {
        $this->result = log($a);
        return $this->result;
    }

    //exponent function
    public function exponent(float $a): float {
        $this->result = exp($a);
        return $this->result;
    }

    //factorial function
    public function factorial(int $a): int {
        if ($a < 0) {
            throw new Exception("Cannot calculate factorial of negative number");
        }
        $this->result = $a;
        for ($i = $a - 1; $i > 1; $i--) {
            $this->result *= $i;
        }
        return $this->result;
    }

    // Get the result of the previous calculation
    public function getResult(): float {
        return $this->result;
    }

    // Clear the result
    public function clearResult(): void {
        $this->result = 0;
    }
}
