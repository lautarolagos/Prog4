<?php require 'header.php'; ?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Detalles de Factura</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>Nombre</th>
                         <th>Descripcion</th>
                         <th>Precio</th>
                         <th>Cantidad</th>
                         <th>Sub-total</th>
                    </thead>
                    <tbody>
                    <?php $total=0; 
                    foreach($arrayItems as $key => $value){ ?>
                         <tr>
                              <td><?php echo $value->getName(); ?></td>
                              <td><?php echo $value->getDescription(); ?></td>
                              <td><?php echo $value->getPrice(); ?></td>
                              <td><?php echo $value->getQuantity(); ?></td>
                              <?php $subtotal = $value->getPrice() * $value->getQuantity();?>
                              <td><?php echo "$subtotal"; ?></td>
                              <?php $total = $total + $subtotal; ?> 
                         </tr>
                         </tr>
                    </tbody>
                    <?php }?>
               </table>
          </div>
     </section>

     <section id="eliminar">
          <div class="container">
               
               <form action="" method="POST" class="form-inline bg-light-alpha p-3">
                    <div class="form-group text-white">
                         <label for="">TOTAL</label>
                         <input type="text" name="total" value="<?php echo "$total"; ?>" class="form-control ml-3" disabled>
                    </div>
                    <button type="submit" name="button" class="btn btn-danger ml-3">Calcular Total</button>
               </form>
          </div>
     </section>

</main>
<?php require 'footer.php'; ?>
