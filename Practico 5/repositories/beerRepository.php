<?php
    namespace repositories;

    use repositories\IBeerRepository as IbeerRepository;
    use model\beer as beer;
    
    class beerRepository implements IBeerRepository
    {
        private $beerList = array();
        private $fileName;

        public function __construct()
        {
            $this->fileName = dirname(__DIR__)."/data/beers.json";
        }

        public function Add(beer $beer)
        {
            $this->RetrieveData();

            array_push($this->beerList, $beer);

            $this->SaveData();
        }

        public function GetAll()
        {
            $this->RetrieveData();
            return $this->beerList;
        }

        private function SaveData()
        {
            $arrayToEncode = array();

            foreach($this->beerList as $beer)
            {
                $valuesArray["code"] = $beer->getCode();
                $valuesArray["name"] = $beer->getName();
                $valuesArray["description"] = $beer->getDescription();
                $valuesArray["type"] = $beer->getType();

                array_push($arrayToEncode, $valuesArray);
            }

            $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);

            file_put_contents($this->fileName, $jsonContent);
        }

        private function RetrieveData()
        {
            $this->beerList = array();

            if(file_exists($this->fileName))
            {
                $jsonContent = file_get_contents($this->fileName);

                $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();

                foreach($arrayToDecode as $valuesArray)
                {
                    $beer = new beer();
                    $beer->setCode($valuesArray["code"]);
                    $beer->setName($valuesArray["name"]);
                    $beer->setDescription($valuesArray["description"]);
                    $beer->setType($valuesArray["type"]);

                    array_push($this->beerList, $beer);
                }
            }
        }
    }
?>