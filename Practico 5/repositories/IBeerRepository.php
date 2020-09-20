<?php
    namespace repositories;
    use model\beer as beer;

    interface IBeerRepository
    {
        function Add(beer $beer);
        function GetAll();
    }
?>