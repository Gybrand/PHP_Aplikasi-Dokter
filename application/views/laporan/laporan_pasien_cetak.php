<!DOCTYPE HTML>
<html>

<head>
  <title>Cetak Laporan Pasien</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/cetak.css">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/cetak.css">
  <style type="text/css">
    <!--
    .style2 {
      font-size: 14px;
      font-family: "Courier New", Courier, monospace;
      font-weight: bold;
    }

    .style14 {
      font-family: "Courier New", Courier, monospace;
      font-size: 13px;
    }

    .style15 {
      font-size: 12px
    }
    -->
    tr
    th
    {
    font-family:
    "Courier
    New",
    Courier,
    monospace;
    font-size:
    13px;
    font-weight:
    bold;
    }
    tr
    td
    {
    font-family:
    "Courier
    New",
    Courier,
    monospace;
    font-size:
    12px;
    }
  </style>
</head>

<body onload="window.print()">

  <div class="title" align="center">
    <?php echo "<center>Praktik Umum Dokter Hariati Salim</center>"; ?><br>
    <?php echo "Villa Regency Tangerang II Blok FC 1/42 A "; ?><br>
    <?php echo "Telp. (021) 2235 9430 WA. 0815 8388 178"; ?> <br>
    <br>
    <?php echo $this->session->userdata('namalengkap'); ?><br>
  </div>

  <div class="content" align="center">
    <h3>Laporan Data Pasien <br>Periode : <?php echo date('d-M-Y', strtotime($dari)); ?> s/d <?php echo date('d-M-Y', strtotime($sampai)); ?></h3>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>No. Registrasi</th>
          <th>Tanggal</th>
          <th>Nama Pasien</th>
          <th>Alamat</th>
          <th>Umur</th>
        </tr>
      </thead>
      <tbody>
        <?php if (empty($query)) {
          echo '<tr><td colspan="6">Data tidak tersedia.</td></tr>';
        } else {
          foreach ($query as $row) :
        ?>
            <tr>
              <td><?php echo $row->no_reg; ?></td>
              <td><?php echo $row->tanggal; ?></td>
              <td><?php echo $row->namalengkap; ?></td>
              <td><?php echo $row->alamat; ?></td>
              <td><?php echo $row->umur; ?> Th</td>

            </tr>
        <?php
          endforeach;
        }
        ?>
      </tbody>
    </table>

  </div>

</body>

</html>
<script type="text/javascript">
  document.onkeydown = function(e) {
    if (e.keyCode == 27) { //--ESC--
      setTimeout('self.location.href = "<?php echo site_url(); ?>/laporan"', 0);
    } else if (e.keyCode == 13) { //--Tombol ENTER--
      window.print();
    }
  }
</script>