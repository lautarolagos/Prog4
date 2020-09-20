<?php
     include('header.php');
     include('nav.php');
     require_once("config/autoload.php");

     use model\beer as beer;
     use repositories\beerRepository as beerRepository;

     $beerRepository = new beerRepository();
     $beerList = $beerRepository->GetAll();

?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Titulo</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>Code</th>
                         <th>Name</th>
                         <th>Description</th>
                         <th>Type</th>
                    </thead>
                    <tbody>
                         <tr>
                         <?php
                         foreach($beerList as $beer)
                         {
                         ?>
                              <td><?php echo $beer->getCode(); ?></td>
                              <td><?php echo $beer->getName(); ?></td>
                              <td><?php echo $beer->getDescription(); ?></td>
                              <td><?php echo $beer->getType(); ?></td>
                         </tr>
                         <?php
                         }?>
                    </tbody>
               </table>
          </div>
     </section>

     <section id="eliminar">
          <div class="container">
               
               <form action="" method="" class="form-inline bg-light-alpha p-3">

               </form>
          </div>
     </section>

</main>

<?php include('footer.php') ?>
