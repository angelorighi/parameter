Simple Parameter string normalization
==============================

    use Angelor\Component\Parameter\Parameter;

    $params = new Parameter('php,developer');

    print $params;  // Strin with magic method __toString()

    var_dump($params->getParameters())); // As array

Running the tests:
----------------------

    phpunit -c phpunit.xml.dist