<?php require_once dirname(__FILE__).'/header.php'; 

//if ( !is_login())
//{
//redirect('index.php', 'Anda perlu log masuk terlebih dahulu',
//'warning');
//}
//?>


<div class="container">
<div class="panel panel-primary">
        <div class="panel-heading">Maklumat pelajar</div>
        <div class="panel-body">
          <div class="row">
              
           <form id="daftarpelajar" class="form-horizontal" method="post" 
                 action="process/daftar_pelajar_process.php" enctype="multipart/form-data">   

              
                <div class="col-md-12"> 
              
<!--                    nama pelajar-->
                    <div class="form-group form-group-sm">
                          <label for="nama" class="col-md-2 control-label">Nama Pelajar</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                        </div>
                    </div>
                    
<!--                     mykad tarikhlahir jantina-->
                     <div class="form-group form-group-sm">  
                         
                        <label for="ic" class="col-md-2 control-label">No MyKad</label>
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="ic" name="ic"  
                                   placeholder="100101-01-0101">
                        </div>
                        <label for="dob" class="col-md-2 control-label">Tarikh Lahir</label>
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="dob" name="dob">
                        </div>
                        
                         <label for="jantina" class="col-md-1 control-label">Jantina</label>
                         <div class="col-md-2">
                            <input type="text" class="form-control" id="jantina" name="jantina">
                        </div>
                    </div>

<!--                     agama bangsa-->
                     <div class="form-group form-group-sm">  
                         
                        <label for="agama" class="col-md-2 control-label">Agama</label>
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="agama" name="agama"  
                                   placeholder="">
                          
                        </div>
                        <label for="bangsa" class="col-md-2 control-label">Bangsa</label>
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="bangsa" name="bangsa" placeholder="">
                        </div>
                    </div>
                    
<!--                      alamat-->
                     <div class="form-group">  
                        <label for="alamat1" class="col-md-2 control-label">Alamat</label>
                        <div class="col-md-4">
                            <textarea class="form-control" id="alamat1" name="alamat1" rows="6"></textarea>
                        </div>
  
                    </div>                    
                    
                     <div class="form-group form-group-sm">  
                         
                        <label for="asal" class="col-md-2 control-label">Negeri Asal</label>
                        <div class="col-md-3">
                                <select class="form-control" id="asal" name="asal">
                                    <option value="">Pilih Negeri</option>
                                    <option value="PERLIS">PERLIS</option>
                                     <option value="KEDAH">KEDAH</option>
                                     <option value="PULAU PINANG">PULAU PINANG</option>
                                     <option value="PERAK">PERAK</option>
                                     <option value="SELANGOR">SELANGOR</option>
                                     <option value="KUALA LUMPUR">KUALA LUMPUR</option>
                                     <option value="PUTRAJAYA">PUTRAJAYA</option>
                                     <option value="KELANTAN">KELANTAN</option>
                                     <option value="TERENGGANU">TERENGGANU</option>
                                     <option value="PAHANG">PAHANG</option>
                                     <option value="NEGERI SEMBILAN">NEGERI SEMBILAN</option>
                                     <option value="MELAKA">MELAKA</option>
                                     <option value="JOHOR">JOHOR</option>
                                     <option value="SABAH">SABAH</option>
                                     <option value="SARAWAK">SARAWAK</option>
                                     <option value="LABUAN">LABUAN</option>
                                    </select> 
                          
                        </div>
                        <label for="telpelajar" class="col-md-2 control-label">No Telefon</label>
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="telpelajar" name="telpelajar" placeholder="">
                        </div>
                    </div>

                    <div class="form-group form-group-sm">  
                          <label for="program" class="col-md-2 control-label">PROGRAM</label>
                         <div class="col-md-3">
                                            <?php $program = get_all_program();?>
                                    <select class="form-control" id="program" name="program">
                                    <option value="">Sila pilih</option>
                                    <?php foreach ($program as $program) : ?>
                                    <option value="<?php echo $program['id']; ?>">
                                        <?php echo $program['kod']; ?> <?php echo $program['nama']; ?> <?php echo $program['diploma']; ?>
                                    </option>
                                    <?php endforeach; ?>
                                    </select> 
                        </div>                      
                           <label for="matrik" class="col-md-2 control-label">No Matrik</label>
                         <div class="col-md-3">
                            <input type="text" class="form-control" id="matrik" name="matrik" placeholder="">
                        </div>                  
                        
                    </div>

                        <div class="form-group form-group-sm">  
                        <label for="felda" class="col-md-2 control-label">Anak FELDA</label>
                              <div class="col-md-3">
                            <label class="radio-inline active">
                              <input type="radio" name="felda" id="felda" value="0" checked> Tidak
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="felda" id="felda" value="1"> Ya
                            </label>
                        </div>
                        
                         <label for="lepasan" class="col-md-2 control-label">Lepasan</label>
                         <div class="col-md-3">
                                            <?php $lepasan = get_all_lepasan();?>
                                    <select class="form-control" id="lepasan" name="lepasan">
                                    <option value="">Sila pilih</option>
                                    <?php foreach ($lepasan as $lepasan) : ?>
                                    <option value="<?php echo $lepasan['id']; ?>">
                                        <?php echo $lepasan['nama']; ?>
                                    </option>
                                    <?php endforeach; ?>
                                    </select> 
                        </div> 
                        </div> 
                         
                         
                         <div class="form-group form-group-sm">  
                         <label for="aliran" class="col-md-2 control-label">Aliran</label>
                         <div class="col-md-4">
                                            <?php $aliran = get_all_aliran();?>
                                    <select class="form-control" id="aliran" name="aliran">
                                    <option value="">Sila pilih</option>
                                    <?php foreach ($aliran as $aliran) : ?>
                                    <option value="<?php echo $aliran['id']; ?>">
                                        <?php echo $aliran['nama']; ?>
                                    </option>
                                    <?php endforeach; ?>
                                    </select> 
                        </div> 
                         
                        </div>

                              <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            
                        <a class="btn btn-danger" onclick="comEventOccured(daftarpelajar)">
                            <i class="fa fa-chevron-circle-left"></i> Load IC</a>
 
                     <button type="submit" class="btn btn-primary">
                            <i class="fa fa-paper-plane"></i> Simpan</button>

                        </div>
                  </div>
  
           
               </div>       
           </form>
        
       </div>
</div>

      <footer class="pull-right">
        <p><i class="fa fa-android"></i><small> Yuraimy Yakimin 2015</small></p>
      </footer>
        </div>
 </div><!--end container -->   



   



