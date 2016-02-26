<h2><?php echo $title; ?></h2>

        <div class="container">
              <div class="row">
                      <div calss="col-md-12">
               <!--   <?php // The function header by sending raw excel
//header("Content-type: application/vnd-ms-excel");
 
// Defines the name of the export file "codelution-export.xls"
//header("Content-Disposition: attachment; filename=codelution-export.xls"); ?> -->
                           <table class="table table-striped">
                                  <tr>
                                        <th>Név</th>
                                        <th>Email</th>
                                        <th>Egyetem</th>        
                                        <th>Telefon</th>
                                        <th>Szállás</th>
                                        <th>Munka címe</th>
                                        <th>Összefolaló</th>
                                        <th>Publikál</th>
                                        <th>Tém.vez név</th>
                                        <th>Tém.vez email</th>
                                  </tr>
<?php foreach ($members as $members_item): ?>

                                  <tr>
                                        <td><?php echo $members_item['name']; ?></td>
                                        <td><?php echo $members_item['email']; ?></td>
                                        <td><?php echo $members_item['university']; ?></td>
                                        <td><?php echo $members_item['phone']; ?></td>
                                        <td><?php echo $members_item['accomodation']; ?></td>
                                        <td><?php echo $members_item['work_title']; ?></td>
                                        <td id="summary"><?php echo $members_item['summary']; ?></td>
                                        <td><?php echo $members_item['publication']; ?></td>
                                        <td><?php echo $members_item['leader_name']; ?></td>
                                        <td><?php echo $members_item['leader_email']; ?></td>
                                  </tr>
 <?php endforeach; ?>
                        </table> 
                      </div>
              </div>
              <a class="btn btn-black" href="members/getexcel">Excel fájl letöltése </a>  
        </div>
        


<!--         <h3><?php echo $members_item['name']; ?></h3>
        <div class="main">
                <?php echo $members_item['email']; ?>
                <?php echo $members_item['university']; ?>
                <?php echo $members_item['phone']; ?>
                <?php echo $members_item['accomodation']; ?>
                <?php echo $members_item['work_title']; ?>
                <?php echo $members_item['publication']; ?>
                <?php echo $members_item['summary']; ?>
                <?php echo $members_item['leader_name']; ?>
                <?php echo $members_item['leader_email']; ?>
        </div>
        <p><a href="<?php echo site_url('members/'.$members_item['slug']); ?>">View article</a></p> -->

