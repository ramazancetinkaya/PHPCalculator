# PHPCalculator
PHP Calculator

## Here is an example of how you can use the class:

```php
// Create an instance of the Calculator class
$calculator = new Calculator();

// Perform some calculations
$result = $calculator->add(5, 3); // $result = 8
$result = $calculator->subtract(5, 3); // $result = 2
$result = $calculator->multiply(5, 3); // $result = 15
$result = $calculator->divide(10, 2); // $result = 5
$result = $calculator->square(4); // $result = 16
$result = $calculator->squareRoot(16); // $result = 4
$result = $calculator->power(2, 3); // $result = 8
$result = $calculator->mod(10, 3); // $result = 1
$result = $calculator->sin(90); // $result = 1
$result = $calculator->cos(90); // $result = 6.123233995736766E-17
$result = $calculator->tan(90); // $result = 1.633123935319537E16
$result = $calculator->logarithm(100, 10); // $result = 2
$result = $calculator->naturalLogarithm(100); // $result = 4.605170185988092
$result = $calculator->exponent(2); // $result = 7.389056098930649
$result = $calculator->factorial(5); // $result = 120

// Display the result
echo $result;

// Get the result of the previous calculation
$previousResult = $calculator->getResult();

// Clear the result
$calculator->clearResult();
```
