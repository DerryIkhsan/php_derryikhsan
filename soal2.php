<style>
    .d-none{
        display: none;
    }

    .d-block{
        display: block;
    }
</style>

<?php
    if(isset($_POST['submit'])){
        $nama = $_POST['nama']; 
        $umur = $_POST['umur']; 
        $hobi = $_POST['hobi']; 

        echo "Nama : $nama <br />";
        echo "Umur : $umur <br />";
        echo "Hobi : $hobi <br />";   
    }
    else{
?>

<form id="form" onsubmit="return false;" action="#" method="post">
    <div id="nama">
        Nama Anda : <input type="text" name="nama">

        <button type="button" onclick="showUmur();">SUBMIT</button>
    </div>

    <div id="umur" class="d-none">
        Umur Anda : <input type="text" name="umur">

        <button type="button" onclick="showHobi();">SUBMIT</button>
    </div>

    <div id="hobi" class="d-none">
        Hobi Anda : <input type="text" name="hobi">

        <button name="submit" type="submit">SUBMIT</button>
    </div>
</form>

<?php 
    }
?>


<script>
    function showUmur(){
        document.getElementById('nama').classList.add('d-none');
        document.getElementById('umur').classList.add('d-block');
    }

    function showHobi(){
        document.getElementById('form').removeAttribute("onsubmit");
        document.getElementById('umur').classList.add('d-none');
        document.getElementById('umur').classList.remove('d-block');
        document.getElementById('hobi').classList.add('d-block');
    }
</script>