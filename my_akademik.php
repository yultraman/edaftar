<?php require_once dirname(__FILE__).'/header.php'; 

if ( !is_login())
{
redirect('index.php', 'Anda perlu log masuk terlebih dahulu',
'danger');
}

$item = get_user($_SESSION['user_id']);
?>


<div class="container">
<div class="panel panel-primary">
        <div class="panel-heading text-uppercase text-center">Maklumat Akademik</div>
        <div class="panel-body">
<div class="row">         
        

     
     <form id="my_akademik" class="form-horizontal" method="post" 
                 action="process/edit_myakademik_process.php" enctype="multipart/form-data">   
<div class="col-md-12">   
    <legend class="text-center"><b>Maklumat Akademik (SPM)</b></legend> 
       <div class="form-group form-group-sm">
        <label for="tahunspm" class="col-md-2 col-md-offset-2 control-label">Tahun SPM</label>
        <div class="col-md-2 ">
            <input type="text" class="form-control" id="tahunspm" name="tahunspm"
                   value="<?php echo $item['tahunspm'];?>">
        </div>
      </div> 
    <div class='col-md-8 col-md-offset-2'>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Bil</th>
            <th>Subjek</th>
            <th>Keputusan</th>
        </tr>
    
        <tbody>
            <tr>
                 <td class="col-md-1">1</td>   
                 <td class="col-md-5">   
                     <select class="form-control" name="spm1" id="spm1" >   
                        <option value="1">1103 Bahasa Melayu</option>
                   </select> </td>   
                <td class="col-md-1">
                   <select name="spmresult1" class="form-control select2me spmres" data-placeholder="Select...">
                    <option value=""></option>
                        <option value="A+"<?php echo $item['spmresult1'] == 'A+' ?'selected' : ''; ?>>A+</option>
                        <option value="A"<?php echo $item['spmresult1'] == 'A' ?'selected' : ''; ?>>A</option>
                        <option value="A-"<?php echo $item['spmresult1'] == 'A-' ?'selected' : ''; ?>>A-</option>
                        <option value="B+"<?php echo $item['spmresult1'] == 'B+' ?'selected' : ''; ?>>B+</option>
                        <option value="B"<?php echo $item['spmresult1'] == 'B' ?'selected' : ''; ?>>B</option>
                        <option value="C+"<?php echo $item['spmresult1'] == 'C+' ?'selected' : ''; ?>>C+</option>
                        <option value="C"<?php echo $item['spmresult1'] == 'C' ?'selected' : ''; ?>>C</option>
                        <option value="D"<?php echo $item['spmresult1'] == 'D' ?'selected' : ''; ?>>D</option>
                        <option value="E"<?php echo $item['spmresult1'] == 'E' ?'selected' : ''; ?>>E</option>
                        <option value="G"<?php echo $item['spmresult1'] == 'G' ?'selected' : ''; ?>>G</option>
                  </select></td>  
           </tr>
           
                       <tr>
                 <td class="col-md-1">2</td>   
                 <td class="col-md-5">   
                     <select class="form-control" name="spm2" id="spm2" >   
                        <option value="2">1119 Bahasa Inggeris</option>
                   </select> </td>   
                <td class="col-md-1">
                   <select name="spmresult2" class="form-control" data-placeholder="Select...">
                    <option value=""></option>
                        <option value="A+"<?php echo $item['spmresult2'] == 'A+' ?'selected' : ''; ?>>A+</option>
                        <option value="A"<?php echo $item['spmresult2'] == 'A' ?'selected' : ''; ?>>A</option>
                        <option value="A-"<?php echo $item['spmresult2'] == 'A-' ?'selected' : ''; ?>>A-</option>
                        <option value="B+"<?php echo $item['spmresult2'] == 'B+' ?'selected' : ''; ?>>B+</option>
                        <option value="B"<?php echo $item['spmresult2'] == 'B' ?'selected' : ''; ?>>B</option>
                        <option value="C+"<?php echo $item['spmresult2'] == 'C+' ?'selected' : ''; ?>>C+</option>
                        <option value="C"<?php echo $item['spmresult2'] == 'C' ?'selected' : ''; ?>>C</option>
                        <option value="D"<?php echo $item['spmresult2'] == 'D' ?'selected' : ''; ?>>D</option>
                        <option value="E"<?php echo $item['spmresult2'] == 'E' ?'selected' : ''; ?>>E</option>
                        <option value="G"<?php echo $item['spmresult2'] == 'G' ?'selected' : ''; ?>>G</option>

                  </select></td>  
           </tr>
           
                                  <tr>
                 <td class="col-md-1">3</td>   
                 <td class="col-md-5">   
                     <select class="form-control" name="spm3" id="spm3" >   
                        <option value="6">1449 Mathematics</option>
                   </select> </td>   
                <td class="col-md-1">
                   <select name="spmresult3" class="form-control" data-placeholder="Select...">
                    <option value=""></option>
                        <option value="A+"<?php echo $item['spmresult3'] == 'A+' ?'selected' : ''; ?>>A+</option>
                        <option value="A"<?php echo $item['spmresult3'] == 'A' ?'selected' : ''; ?>>A</option>
                        <option value="A-"<?php echo $item['spmresult3'] == 'A-' ?'selected' : ''; ?>>A-</option>
                        <option value="B+"<?php echo $item['spmresult3'] == 'B+' ?'selected' : ''; ?>>B+</option>
                        <option value="B"<?php echo $item['spmresult3'] == 'B' ?'selected' : ''; ?>>B</option>
                        <option value="C+"<?php echo $item['spmresult3'] == 'C+' ?'selected' : ''; ?>>C+</option>
                        <option value="C"<?php echo $item['spmresult3'] == 'C' ?'selected' : ''; ?>>C</option>
                        <option value="D"<?php echo $item['spmresult3'] == 'D' ?'selected' : ''; ?>>D</option>
                        <option value="E"<?php echo $item['spmresult3'] == 'E' ?'selected' : ''; ?>>E</option>
                        <option value="G"<?php echo $item['spmresult3'] == 'G' ?'selected' : ''; ?>>G</option>

                  </select></td>  
           </tr>
           
           <tr>
               
                 <td class="col-md-1">4</td>   
                   <?php $kursus = get_all_kursus();?>
                 <td class="col-md-5">   
                     <select class="form-control selectpicker" data-live-search="true" name="spm4" id="spm4"> 
                         <option value="">Sila pilih</option>
                        <?php foreach ($kursus as $kursus) : ?>
                        <option value="<?php echo $kursus['id']; ?>"<?php echo $item['spm4'] == $kursus['id'] ? 'selected' : '';?>>
                        <?php echo $kursus['kod_kursus']; ?> <?php echo $kursus['nama_kursus'];?></option>
                        <?php endforeach; ?>
                   </select> </td>   
                <td class="col-md-1">
                      <select name="spmresult4" class="form-control">
                    <option value="">Sila pilih</option>
                        <option value="A+"<?php echo $item['spmresult4'] == 'A+' ?'selected' : ''; ?>>A+</option>
                        <option value="A"<?php echo $item['spmresult4'] == 'A' ?'selected' : ''; ?>>A</option>
                        <option value="A-"<?php echo $item['spmresult4'] == 'A-' ?'selected' : ''; ?>>A-</option>
                        <option value="B+"<?php echo $item['spmresult4'] == 'B+' ?'selected' : ''; ?>>B+</option>
                        <option value="B"<?php echo $item['spmresult4'] == 'B' ?'selected' : ''; ?>>B</option>
                        <option value="C+"<?php echo $item['spmresult4'] == 'C+' ?'selected' : ''; ?>>C+</option>
                        <option value="C"<?php echo $item['spmresult4'] == 'C' ?'selected' : ''; ?>>C</option>
                        <option value="D"<?php echo $item['spmresult4'] == 'D' ?'selected' : ''; ?>>D</option>
                        <option value="E"<?php echo $item['spmresult4'] == 'E' ?'selected' : ''; ?>>E</option>
                        <option value="G"<?php echo $item['spmresult4'] == 'G' ?'selected' : ''; ?>>G</option>

                  </select></td>  
           </tr>
           
           <tr>
               
                 <td class="col-md-1">5</td>   
                   <?php $kursus = get_all_kursus();?>
                 <td class="col-md-5">   
                     <select class="form-control selectpicker"  data-live-search="true" name="spm5">   
                        <option value="">Sila pilih</option>
                         <?php foreach ($kursus as $kursus) : ?>
                        <option value="<?php echo $kursus['id']; ?>"<?php echo $item['spm5'] == $kursus['id'] ? 'selected' : '';?>>
                        <?php echo $kursus['kod_kursus']; ?> <?php echo $kursus['nama_kursus'];?></option>
                        <?php endforeach; ?>
                   </select> </td>   
                <td class="col-md-1">
                   <select name="spmresult5" class="form-control">
                    <option value="">Sila pilih</option>
                        <option value="A+"<?php echo $item['spmresult5'] == 'A+' ?'selected' : ''; ?>>A+</option>
                        <option value="A"<?php echo $item['spmresult5'] == 'A' ?'selected' : ''; ?>>A</option>
                        <option value="A-"<?php echo $item['spmresult5'] == 'A-' ?'selected' : ''; ?>>A-</option>
                        <option value="B+"<?php echo $item['spmresult5'] == 'B+' ?'selected' : ''; ?>>B+</option>
                        <option value="B"<?php echo $item['spmresult5'] == 'B' ?'selected' : ''; ?>>B</option>
                        <option value="C+"<?php echo $item['spmresult5'] == 'C+' ?'selected' : ''; ?>>C+</option>
                        <option value="C"<?php echo $item['spmresult5'] == 'C' ?'selected' : ''; ?>>C</option>
                        <option value="D"<?php echo $item['spmresult5'] == 'D' ?'selected' : ''; ?>>D</option>
                        <option value="E"<?php echo $item['spmresult5'] == 'E' ?'selected' : ''; ?>>E</option>
                        <option value="G"<?php echo $item['spmresult5'] == 'G' ?'selected' : ''; ?>>G</option>

                  </select></td>  
           </tr>   
           <tr>
                 <td class="col-md-1">6</td>   
                   <?php $kursus = get_all_kursus();?>
                 <td class="col-md-5">   
                     <select class="form-control selectpicker"  data-live-search="true" name="spm6">   
                        <option value="">Sila pilih</option>
                         <?php foreach ($kursus as $kursus) : ?>
                        <option value="<?php echo $kursus['id']; ?>"<?php echo $item['spm6'] == $kursus['id'] ? 'selected' : '';?>>
                        <?php echo $kursus['kod_kursus']; ?> <?php echo $kursus['nama_kursus'];?></option>
                        <?php endforeach; ?>
                   </select> </td>   
                <td class="col-md-1">
                   <select name="spmresult6" class="form-control">
                    <option value="">Sila pilih</option>
                        <option value="A+"<?php echo $item['spmresult6'] == 'A+' ?'selected' : ''; ?>>A+</option>
                        <option value="A"<?php echo $item['spmresult6'] == 'A' ?'selected' : ''; ?>>A</option>
                        <option value="A-"<?php echo $item['spmresult6'] == 'A-' ?'selected' : ''; ?>>A-</option>
                        <option value="B+"<?php echo $item['spmresult6'] == 'B+' ?'selected' : ''; ?>>B+</option>
                        <option value="B"<?php echo $item['spmresult6'] == 'B' ?'selected' : ''; ?>>B</option>
                        <option value="C+"<?php echo $item['spmresult6'] == 'C+' ?'selected' : ''; ?>>C+</option>
                        <option value="C"<?php echo $item['spmresult6'] == 'C' ?'selected' : ''; ?>>C</option>
                        <option value="D"<?php echo $item['spmresult6'] == 'D' ?'selected' : ''; ?>>D</option>
                        <option value="E"<?php echo $item['spmresult6'] == 'E' ?'selected' : ''; ?>>E</option>
                        <option value="G"<?php echo $item['spmresult6'] == 'G' ?'selected' : ''; ?>>G</option>

                  </select></td>  
           </tr>            
           
           <tr>
                 <td class="col-md-1">7</td>   
                   <?php $kursus = get_all_kursus();?>
                 <td class="col-md-5">   
                     <select class="form-control selectpicker"  data-live-search="true" name="spm7">   
                        <option value="">Sila pilih</option>
                         <?php foreach ($kursus as $kursus) : ?>
                        <option value="<?php echo $kursus['id']; ?>"<?php echo $item['spm7'] == $kursus['id'] ? 'selected' : '';?>>
                        <?php echo $kursus['kod_kursus']; ?> <?php echo $kursus['nama_kursus'];?></option>
                        <?php endforeach; ?>
                   </select> </td>   
                <td class="col-md-1">
                   <select name="spmresult7" class="form-control">
                    <option value="">Sila pilih</option>
                        <option value="A+"<?php echo $item['spmresult7'] == 'A+' ?'selected' : ''; ?>>A+</option>
                        <option value="A"<?php echo $item['spmresult7'] == 'A' ?'selected' : ''; ?>>A</option>
                        <option value="A-"<?php echo $item['spmresult7'] == 'A-' ?'selected' : ''; ?>>A-</option>
                        <option value="B+"<?php echo $item['spmresult7'] == 'B+' ?'selected' : ''; ?>>B+</option>
                        <option value="B"<?php echo $item['spmresult7'] == 'B' ?'selected' : ''; ?>>B</option>
                        <option value="C+"<?php echo $item['spmresult7'] == 'C+' ?'selected' : ''; ?>>C+</option>
                        <option value="C"<?php echo $item['spmresult7'] == 'C' ?'selected' : ''; ?>>C</option>
                        <option value="D"<?php echo $item['spmresult7'] == 'D' ?'selected' : ''; ?>>D</option>
                        <option value="E"<?php echo $item['spmresult7'] == 'E' ?'selected' : ''; ?>>E</option>
                        <option value="G"<?php echo $item['spmresult7'] == 'G' ?'selected' : ''; ?>>G</option>

                  </select></td>  
           </tr>             
           
<tr>
                 <td class="col-md-1">8</td>   
                   <?php $kursus = get_all_kursus();?>
                 <td class="col-md-5">   
                     <select class="form-control selectpicker"  data-live-search="true" name="spm8">   
                        <option value="">Sila pilih</option>
                         <?php foreach ($kursus as $kursus) : ?>
                        <option value="<?php echo $kursus['id']; ?>"<?php echo $item['spm8'] == $kursus['id'] ? 'selected' : '';?>>
                        <?php echo $kursus['kod_kursus']; ?> <?php echo $kursus['nama_kursus'];?></option>
                        <?php endforeach; ?>
                   </select> </td>   
                <td class="col-md-1">
                   <select name="spmresult8" class="form-control">
                    <option value="">Sila pilih</option>
                        <option value="A+"<?php echo $item['spmresult8'] == 'A+' ?'selected' : ''; ?>>A+</option>
                        <option value="A"<?php echo $item['spmresult8'] == 'A' ?'selected' : ''; ?>>A</option>
                        <option value="A-"<?php echo $item['spmresult8'] == 'A-' ?'selected' : ''; ?>>A-</option>
                        <option value="B+"<?php echo $item['spmresult8'] == 'B+' ?'selected' : ''; ?>>B+</option>
                        <option value="B"<?php echo $item['spmresult8'] == 'B' ?'selected' : ''; ?>>B</option>
                        <option value="C+"<?php echo $item['spmresult8'] == 'C+' ?'selected' : ''; ?>>C+</option>
                        <option value="C"<?php echo $item['spmresult8'] == 'C' ?'selected' : ''; ?>>C</option>
                        <option value="D"<?php echo $item['spmresult8'] == 'D' ?'selected' : ''; ?>>D</option>
                        <option value="E"<?php echo $item['spmresult8'] == 'E' ?'selected' : ''; ?>>E</option>
                        <option value="G"<?php echo $item['spmresult8'] == 'G' ?'selected' : ''; ?>>G</option>

                  </select></td>  
           </tr>
            
<tr>
                 <td class="col-md-1">9</td>   
                   <?php $kursus = get_all_kursus();?>
                 <td class="col-md-5">   
                     <select class="form-control selectpicker"  data-live-search="true" name="spm9">   
                        <option value="">Sila pilih</option>
                         <?php foreach ($kursus as $kursus) : ?>
                        <option value="<?php echo $kursus['id']; ?>"<?php echo $item['spm9'] == $kursus['id'] ? 'selected' : '';?>>
                        <?php echo $kursus['kod_kursus']; ?> <?php echo $kursus['nama_kursus'];?></option>
                        <?php endforeach; ?>
                   </select> </td>   
                <td class="col-md-1">
                   <select name="spmresult9" class="form-control">
                    <option value="">Sila pilih</option>
                        <option value="A+"<?php echo $item['spmresult9'] == 'A+' ?'selected' : ''; ?>>A+</option>
                        <option value="A"<?php echo $item['spmresult9'] == 'A' ?'selected' : ''; ?>>A</option>
                        <option value="A-"<?php echo $item['spmresult9'] == 'A-' ?'selected' : ''; ?>>A-</option>
                        <option value="B+"<?php echo $item['spmresult9'] == 'B+' ?'selected' : ''; ?>>B+</option>
                        <option value="B"<?php echo $item['spmresult9'] == 'B' ?'selected' : ''; ?>>B</option>
                        <option value="C+"<?php echo $item['spmresult9'] == 'C+' ?'selected' : ''; ?>>C+</option>
                        <option value="C"<?php echo $item['spmresult9'] == 'C' ?'selected' : ''; ?>>C</option>
                        <option value="D"<?php echo $item['spmresult9'] == 'D' ?'selected' : ''; ?>>D</option>
                        <option value="E"<?php echo $item['spmresult9'] == 'E' ?'selected' : ''; ?>>E</option>
                        <option value="G"<?php echo $item['spmresult9'] == 'G' ?'selected' : ''; ?>>G</option>

                  </select></td> 
                  
                  
                  
           </tr>   
           
            
<tr>
                 <td class="col-md-1">10</td>   
                   <?php $kursus = get_all_kursus();?>
                 <td class="col-md-5">   
                     <select class="form-control selectpicker"  data-live-search="true" name="spm10">   
                        <option value="">Sila pilih</option>
                         <?php foreach ($kursus as $kursus) : ?>
                        <option value="<?php echo $kursus['id']; ?>"<?php echo $item['spm10'] == $kursus['id'] ? 'selected' : '';?>>
                        <?php echo $kursus['kod_kursus']; ?> <?php echo $kursus['nama_kursus'];?></option>
                        <?php endforeach; ?>
                   </select> </td>   
                <td class="col-md-1">
                   <select name="spmresult10" class="form-control">
                    <option value="">Sila pilih</option>
                        <option value="A+"<?php echo $item['spmresult10'] == 'A+' ?'selected' : ''; ?>>A+</option>
                        <option value="A"<?php echo $item['spmresult10'] == 'A' ?'selected' : ''; ?>>A</option>
                        <option value="A-"<?php echo $item['spmresult10'] == 'A-' ?'selected' : ''; ?>>A-</option>
                        <option value="B+"<?php echo $item['spmresult10'] == 'B+' ?'selected' : ''; ?>>B+</option>
                        <option value="B"<?php echo $item['spmresult10'] == 'B' ?'selected' : ''; ?>>B</option>
                        <option value="C+"<?php echo $item['spmresult10'] == 'C+' ?'selected' : ''; ?>>C+</option>
                        <option value="C"<?php echo $item['spmresult10'] == 'C' ?'selected' : ''; ?>>C</option>
                        <option value="D"<?php echo $item['spmresult10'] == 'D' ?'selected' : ''; ?>>D</option>
                        <option value="E"<?php echo $item['spmresult10'] == 'E' ?'selected' : ''; ?>>E</option>
                        <option value="G"<?php echo $item['spmresult10'] == 'G' ?'selected' : ''; ?>>G</option>

                  </select></td>  
           </tr>          
        </tbody>
    </table>   
    
    <br>
        <legend class="text-center"><b>Maklumat Akademik (Sijil/Diploma)</b>
        </legend><p class="help-block"><small>*Untuk pelajar lepasan IKM, IKBN atau lain-lain sahaja.</small></p> 
       <div class="form-group form-group-sm">
        <label for="tahunsijil" class="col-md-2 control-label">Tahun</label>
        <div class="col-md-2">
            <input type="text" class="form-control" id="tahunsijil" name="tahunsijil"
                   value="<?php echo $item['tahunsijil'];?>">
        </div>
        <label for="gredsijil" class="col-md-2 control-label">Gred/CGPA</label>
        <div class="col-md-2">
            <input type="text" class="form-control" id="gredsijil" name="gredsijil"
                   value="<?php echo $item['gredsijil'];?>">
        </div>
        
      </div> 
        
        <div class="form-group form-group-sm">
         
        <label for="bidangsijil" class="col-md-2 control-label">Bidang</label>
        <div class="col-md-8">
            <input type="text" class="form-control text-uppercase" id="bidangsijil" name="bidangsijil"
                   value="<?php echo $item['bidangsijil'];?>">
        </div>
       
      </div> 
        
         <div class="form-group form-group-sm">
  
        <label for="iptsijil" class="col-md-2 control-label">Institusi</label>
        <div class="col-md-8">
            <input type="text" class="form-control text-uppercase" id="iptsijil" name="iptsijil"
                   value="<?php echo $item['iptsijil'];?>">
        </div>
       
      </div>        
        
        <br>
        <br>
        <br>
  <div class="form-group">
        <div class="col-md-8 col-md-offset-4">
        <a class="btn btn-danger" href="index.php">
            <i class="fa fa-chevron-circle-left"></i> Kembali</a>
<!--        <button type="reset" class="btn btn-default" id="cancel">
            <i class="fa fa-trash-o"></i> Reset</button>-->
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-paper-plane"></i> Simpan</button>
         <a class="btn btn-warning" href="my_penjamin.php">Seterusnya <i class="fa fa-chevron-circle-right"></i></a>

        </div>
  </div>
    
    
</div> 

    
           
         </form> 
       </div>


            
</div> 
            </div>
                 <input type="hidden" name="id" id="id" value="<?php echo $item['id'];?>">   
          
 
</div>
</div>

        
                     
   
    


