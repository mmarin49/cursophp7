<?php
class Logger{
    public function message(Shop $shop)
    {
        print_r($shop->getmessage());
    }
}

class Shop
{
    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger=$logger;
    }

    public function __call($name, $arguments)
    {
        if(method_exists($this->logger,$name))
        {
            return $this->logger->{$name}($this);
        }
        else
        {
            echo "No existe el método";
        }
    }

    /**
     * @return string
     */
    public function getmessage(): string
    {
        return "Nuevo mensaje del logger";
    }
}

$shop= new Shop(new Logger());
echo $shop->message();
