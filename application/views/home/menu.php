<script type="text/javascript">
$(document).ready(function () {
  $("#searchfield").keyup(function(){
     var word = $("#searchfield").val();
    $.post("<?php echo base_url('id/home/GetSearch/'); ?>",{q:word},function(result){
      $("#result_search").html(result);
      if(word==""){
        $("#result_search").html("");
      }
    });
  });
});

function tempel(isi){
  document.getElementById("searchfield").value = isi;
  document.getElementById("result_search").innerHTML = "";
}

</script>
<div id='cssmenu'>
  <ul>
    <?php
          $lang = $this->lang->lang();

          echo "<li>".anchor(base_url($lang.'/'), "Home", '')."</li>";

          // $menus_0 = $this->menu->get_by_level('0',$lang,"1");
          // if($menus_0->num_rows()){
          // foreach ($menus_0->result() as $m_0 => $menu_0) {
    ?>
    <li class='has-sub'>
      <a href='<?php echo base_url("$lang/page/about_us"); ?>'>
        About Us
      </a>
    </li>
    <li class='has-sub'>
      <a href='#'>
        Solution & Service
      </a>
      <ul>
        <li class='has-sub'>
          <a href="<?php echo base_url("$lang/page/solution"); ?>">
            Solutions
          </a>
        </li>
        <li class='has-sub'>
          <a href="<?php echo base_url("$lang/page/service"); ?>">
            Services
          </a>
        </li>
      </ul>
    </li>
    <li>
      <a href="#">Partner & Client</a>
    </li>
    <li>
      <a href="<?php echo base_url("$lang/careers"); ?>">Carrer</a>
    </li>
    <li>
      <a href="<?php echo base_url("$lang/contact_us"); ?>">Contact Us</a>
    </li>
  </ul>
  <div id="search_box">
    <form action="<?php echo base_url("$lang/home/search/"); ?>" method="post">
      <input type="text" value="Enter keyword here..." name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
      <input type="submit" name="Search" value="" id="searchbutton" title="Search" />
      <div id="result_search"></div>
      <div class="cleaner"></div>
    </form>
  </div>
</div>
