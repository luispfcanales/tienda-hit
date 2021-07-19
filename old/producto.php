<?php
require_once('./views/templates/header.php');
require_once("./views/templates/nabvar.php");
?>    
 
    <div class="card text-center">
      <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
          <li class="nav-item">
            <a class="nav-link active" aria-current="true" href="/producto.html">Celulares</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/producto-accesorio.html">accesorios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/producto-audifono.html" >otros</a>
          </li>
        </ul>
      </div>
      <div class="card-body">
       
        <div class="row">

          <div class="col">
            <div class="card" style="width: 17rem;">
              <img src="https://support.apple.com/library/APPLE/APPLECARE_ALLGEOS/SP705/SP705-iphone_6-mul.png" class="card-img-top" alt="..." >
              <div class="card-body">
                <h5 class="card-title">iphone 6</h5>
                <p class="card-text">S/ 880</p>
                <a href="#" class="btn btn-primary ">ver</a>
              </div>
            </div>
          </div>
    
          <div class="col">
            <div class="card" style="width: 17rem;">
              <img src="https://i.blogs.es/1bd426/samsung-galaxy-j7-2016/1366_2000.jpg" class="card-img-top" alt="..." >
              <div class="card-body">
                <h5 class="card-title">Samsung Galaxy J7 Prime</h5>
                <p class="card-text">S/600</p>
                <a href="#" class="btn btn-primary ">ver</a>
              </div>
            </div>
          </div>
    
          <div class="col">
            <div class="card" style="width: 17rem;">
              <img style="height: 240px;" src="https://http2.mlstatic.com/D_NQ_NP_2X_993392-MPE42246761036_062020-F.webp" class="card-img-top" alt="..." >
              <div class="card-body">
                <h5 class="card-title">Huawei Y5 2018 16gb 1ram</h5>
                <p class="card-text">S/ 410</p>
                <a href="#" class="btn btn-primary ">ver</a>
              </div>
            </div>
          </div>
    
          <div class="col">
            <div class="card" style="width: 17rem;">
              <img style="height: 240px;" src="https://http2.mlstatic.com/D_NQ_NP_2X_973479-MPE44615082825_012021-F.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Huawei Y5 Neo 16gb</h5>
                <p class="card-text">S/ 460</p>
                <a href="#" class="btn btn-primary ">ver</a>
              </div>
            </div>
          </div>
    
          <div class="col">
            <div class="card" style="width: 17rem;">
              <img src="https://upload.wikimedia.org/wikipedia/commons/9/9b/Celular_pope.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Samsung</h5>
                <p class="card-text">este equipo es buenazo.</p>
                <a href="#" class="btn btn-primary ">ver</a>
              </div>
            </div>
          </div>
    
        </div>

      </div>
    </div>

    <?php
require_once("./views/templates/footer.php")
?>
