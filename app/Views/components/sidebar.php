<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href=".">
        <i class="bi bi-grid"></i>
        <span>Home</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link <?php echo (uri_string() == 'guru') ? "" : "collapsed" ?>" href="guru">
        <i class="bi bi-person-rolodex"></i>
        <span>Guru</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?php echo (uri_string() == 'siswa') ? "" : "collapsed" ?>" href="siswa">
        <i class="bi bi-people"></i>
        <span>Siswa</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?php echo (uri_string() == 'keuangan') ? "" : "collapsed" ?>" href="keuangan">
        <i class="bi bi-wallet"></i>
        <span>keuangan</span>
      </a>
    </li>
    <?php
    if (session()->get('role') == 'admin') {
    ?>
    <?php
    }
    ?>
  </ul>

</aside><!-- End Sidebar-->