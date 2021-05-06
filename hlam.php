<div class="col-10 ml-auto" style="background-color: ; text-align: center; height: 500px;  margin-top: 50px;">
    <div>
       <h3>Задания от спонсоров</h3>
      
    </div>
   <hr style="width: 200px; margin-left: auto;margin-right: auto; margin-top: 10px;"> 
    <div class="col-md-10 col-12 mx-auto" style="margin-top: 60px;">
                           <div class="card">
                               <div class="card-header mt-4">
                                   <h4 class="card-title ">
                                        Месячный квест
                                   </h4>
                                   <p style="margin-top: 50px;">
                                            Новый розыгрыш бонусов от dilivery club. В течении месяца вы будете соревноваться с другими командами.
                                            И топ 20 команд получит спецпризы от dilivery club
                                    </p>
                               </div>
                               <div class="card-content">
                                   <div class="card-body">
                                       
                                        <!-- button trigger for  Vertically Centered modal -->
                                       <button type="button" class="btn btn-outline-primary block"
                                            data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                            Учавствовать
                                       </button>
                                        <!-- Vertically Centered modal Modal -->
                                        <div class="modal fade" id="exampleModalCenter"tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                           <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                               <div class="modal-content">
                                                   <div class="modal-header">
                                                       <h5 class="modal-title" id="exampleModalCenterTitle">Пригласить 2 друзей
                                                       </h5>
                                                       <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                   </div>
                                                   <div class="modal-body">
                                                       <p>
                                                            Проходите с друзьями еженедельные задания, чтобы получить 500 бонусов на команду
                                                            (Кол-во бонусов распределяется в зависимости от того, сколько шагов сделал каждый, чтобы выполнить задание)
                                                       </p>
                                                   </div>
                                                   <div class="col-12 col-xl-12">

                                <div class="card">
                                    
                                    <div class="card-header">
                                        <h4>Ваши друзья</h4>
                                    </div>
                                        
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-lg">
                                                <thead>
                                                    <tr>
                                                       
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if ($result61["name"] != "") { ?>
                                                       
        
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="assets/images/faces/5.jpg">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0"><?php 
                                                                    echo $result61["name"];
                                                                    echo " ";
                                                                    echo $result61["surname"];

                                                                 ?></p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <button type="button" style="text-align: center; height: 40px;" class=" invite1 btn btn-primary ml-1"
                                                            >
                                                           
                                                            <input type="hidden" name="" class="inviteid1" <?php echo "value='".$result61["id"]."'" ?>> 
                                                             <p><span id="inp1">Пригласить</span></p>
                                                       </button>
                                                        </td>
                                                    </tr>
                                                    <?php  }  ?>

                                                    <?php if ($result62["name"] != "") { ?>
                                                     <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="assets/images/faces/5.jpg">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0"><?php 
                                                                    echo $result62["name"];
                                                                    echo " ";
                                                                    echo $result62["surname"];

                                                                 ?></p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <button type="button" style="text-align: center; height: 40px;" class=" invite2 btn btn-primary ml-1"
                                                            >
                                                            
                                                            <input type="hidden" name="" class="inviteid2" <?php echo "value='".$result62["id"]."'" ?>> 
                                                            <p><span id="inp2">Пригласить</span></p>
                                                       </button>
                                                        </td>
                                                    </tr>
                                                     <?php } ?>
                                                

                                                       
                                                
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-12">
                                    <div class="col-9  mx-auto">
                                 <form  id="signup-form"  class="signup-form mx-auto"> 
                        <h4 class="form-title">Найти друзей по коду</h4>
                        
                        
                        <div class="form-group">
                                        
                                        <input type="text" class="form-control friendcode " id="basicInput"
                                            placeholder="Код друга">
                                    </div>
                        
                        
                        <button type="button" style="text-align: center; height: 40px;" class="btn friendclick btn-primary ml-1"
                                                            >
                                                             <p style="margin-top: 0px;">Добавить</p>
                                                            
                                                       </button>
                    </form>
                    </div>
                    </div>
                            </div>

                                                   <div class="modal-footer">
                                                       
                                                       <button type="button" style=" height: 40px;"  class="btn ready btn-primary ml-1"
                                                            data-bs-dismiss="modal">
                                                             <input type="hidden" name="" class="uridinvite" <?php echo "value='".$result["id"]."'" ?>>
                                                            
                                                            <p style="margin-top: 0px;" >Готово</p>
                                                       </button>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       
  
  


      </div>

       
       
       </div>