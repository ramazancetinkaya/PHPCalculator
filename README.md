# Calculator

## Here is an example of how you can use the class:

```php
require_once "Calculator.php";

// create an instance of the calculator
$calculator = new Calculator();

// addition
$result = $calculator->add(5, 7);
echo "5 + 7 = $result \n";

// subtraction
$result = $calculator->subtract(10, 3);
echo "10 - 3 = $result \n";

// multiplication
$result = $calculator->multiply(5, 7);
echo "5 x 7 = $result \n";

// division
$result = $calculator->divide(10, 2);
echo "10 / 2 = $result \n";

// square
$result = $calculator->square(5);
echo "5^2 = $result \n";

// square root
$result = $calculator->squareRoot(16);
echo "sqrt(16) = $result \n";

// power
$result = $calculator->power(5, 3);
echo "5^3 = $result \n";

// mod
$result = $calculator->mod(10, 3);
echo "10 % 3 = $result \n";

// sine
$result = $calculator->sin(90);
echo "sin(90) = $result \n";

// cosine
$result = $calculator->cos(60);
echo "cos(60) = $result \n";

// tangent
$result = $calculator->tan(45);
echo "tan(45) = $result \n";

// logarithm
$result = $calculator->logarithm(100, 10);
echo "log(100) base 10 = $result \n";

// natural logarithm
$result = $calculator->naturalLogarithm(2.71828);
echo "ln(2.71828) = $result \n";

// exponent
$result = $calculator->exponent(2.71828);
echo "e^x = $result \n";

// factorial
$result = $calculator->factorial(5);
echo "5! = $result \n";
```

### Authors

**Ramazan Çetinkaya**

- [github/ramazancetinkaya](https://github.com/ramazancetinkaya)

### License

Copyright © 2023, [Ramazan Çetinkaya](https://github.com/ramazancetinkaya).
