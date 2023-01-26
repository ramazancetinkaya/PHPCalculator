<?php

class Calculator {
    // Store the result of the last calculation
    private $result;
  
    /**
     * Add two numbers
     *
     * @param float $x
     * @param float $y
     * @return float
     */
    public function add(float $x, float $y): float {
        $this->result = $x + $y;
        return $this->result;
    }

    /**
     * Subtract two numbers
     *
     * @param float $x
     * @param float $y
     * @return float
     */
    public function subtract(float $x, float $y): float {
        $this->result = $x - $y;
        return $this->result;
    }

    /**
     * Multiply two numbers
     *
     * @param float $x
     * @param float $y
     * @return float
     */
    public function multiply(float $x, float $y): float {
        $this->result = $x * $y;
        return $this->result;
    }

    /**
     * Divide two numbers
     *
     * @param float $x
     * @param float $y
     * @return float
     */
    public function divide(float $x, float $y): float {
        $this->result = $x / $y;
        return $this->result;
    }

    /**
     * Calculate the square of a number
     *
     * @param float $x
     * @return float
     */
    public function square(float $x): float {
        $this->result = $x * $x;
        return $this->result;
    }

    /**
     * Calculate the square root of a number
     *
     * @param float $x
     * @return float
     */
    public function squareRoot(float $x): float {
        $this->result = sqrt($x);
        return $this->result;
    }

    /**
     * Raise a number to a power
     *
     * @param float $x
     * @param int $y
     * @return float
     */
    public function power(float $x, int $y): float {
        $this->result = pow($x, $y);
        return $this->result;
    }

    /**
     * Calculate the modulus of two numbers
     *
     * @param float $x
     * @param float $y
     * @return float
     */
    public function mod(float $x, float $y): float {
        $this->result = $x % $y;
        return $this->result;
    }

    /**
     * Calculate the sine of an angle
     *
     * @param float $x angle in degree
     * @return float
     */
    public function sin(float $x): float {
        $this->result = sin(deg2rad($x));
        return $this->result;
    }

    /**
     * Calculate the cosine of an angle
     *
     * @param float $x angle in degree
     * @return float
     */
    public function cos(float $x): float {
        $this->result = cos(deg2rad($x));
        return $this->result;
    }

    /**
     * Calculate the tangent of an angle
     *
     * @param float $x angle in degree
     * @return float
     */
    public function tan(float $x): float {
        $this->result = tan(deg2rad($x));
        return $this->result;
    }

    /**
     * Calculate the logarithm of a number with a specified base
     *
     * @param float $x
     * @param int $base
     * @return float
     */
    public function logarithm(float $x, int $base): float {
        $this->result = log($x, $base);
        return $this->result;
    }

    /**
     * Calculate the natural logarithm of a number
     *
     * @param float $x
     * @return float
     */
    public function naturalLogarithm(float $x): float {
        $this->result = log($x);
        return $this->result;
    }

    /**
     * Calculate the exponential function of a number
     *
     * @param float $x
     * @return float
     */
    public function exponent(float $x): float {
        $this->result = exp($x);
        return $this->result;
    }

    /**
     * Calculate the factorial of a number
     *
     * @param int $x
     * @return int
     */
    public function factorial(int $x): int {
        $this->result = 1;
        for ($i = 1; $i <= $x; $i++) {
            $this->result *= $i;
        }
        return $this->result;
    }

    /**
     * Get the result of the last calculation
     *
     * @return float
     */
    public function getResult(): float {
        return $this->result;
    }

    /**
     * Clear the stored result
     */
    public function clearResult(): void {
        $this->result = 0;
    }
}
