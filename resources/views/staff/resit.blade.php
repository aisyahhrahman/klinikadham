@extends ('admin')

@section ('content')

<div id="body" class="receipt-content">
  <div class="container bootstrap snippet">
    <div class="row">
      <div class="col-md-12">
        <div class="invoice-wrapper">
          <div class="intro">
            Kepada <strong>{{ $patient['nama_pesakit'] }}</strong>,
            <br>
            Resit pembayaran <strong>RM {{ $total }}</strong>
          </div>

          <div class="payment-info">
            <div class="row">
              <div class="col-sm-6">
                <span>Nombor Pembayaran</span>
                <strong>{{ $invoice_num }}</strong>
              </div>
              <div class="col-sm-6 text-right">
                <span>Tarikh Pembayaran</span>
                <strong>{{ $date_now }}</strong>
              </div>
            </div>
          </div>

          <div class="payment-details">
            <div class="row">
              <div class="col-sm-6">
                <span>Pesakit</span>
                <strong>
                  {{ $patient['nama_pesakit'] }}
                </strong>
              </div>
              <div class="col-sm-6 text-right">
                <span>Pembayaran Kepada</span>
                <strong>
                  KLINIK ADHAM
                </strong>
                <p>
                  Taman Sri Saujana <br>
                  Kota Tinggi <br>
                  81900 <br>
                  Johor <br>
                  <a href="#">
                    klinikadham@gmail.com
                  </a>
                </p>
              </div>
            </div>
          </div>


          <div class="line-items">
            <div class="headers clearfix">
              <div class="row">
                <div class="table-responsive-sm" style="width: 100%;">
                  <table class="table table-striped" id="mytable">
                    <thead>
                      <tr>
                        <th class="center">No</th>
                        <th></th>
                        <th>Description</th>
                        <th class="right">Harga</th>
                        <th class="center">Kuantiti</th>
                        <th class="right">Jumlah</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($patientUbat as $key => $value)
                      <tr>
                        <td class="center">{{ $key + 1 }}</td>
                        <td class="left strong"></td>
                        <td class="left">{{ $value->description }}</td>
                        <td class="right">{{ $value->price }}</td>
                        <td class="center">{{ $value->kuantiti_pembelian }}</td>
                        <td class="right">RM {{ ($value->price * $value->kuantiti_pembelian) }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="total text-right">
                <p class="extra-notes">
                  <strong>Terima Kasih</strong>
                </p>
                <div class="field grand-total">
                  Jumlah Keseluruhan <span>RM {{ $total }}</span>
                </div>
              </div>
              <div class="print">
                <button class="btn btn-primary" id="print">
                  <i class="fa fa-print"></i>
                  Cetak
                </button>
              </div>
            </div>
          </div>
          <div class="footer">
            Hak Cipta © 2020. Klinik Adham
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <style>
    .receipt-content .logo a:hover {
      text-decoration: none;
      color: #7793C4;
    }

    .receipt-content .invoice-wrapper {
      background: #FFF;
      border: 1px solid #CDD3E2;
      box-shadow: 0px 0px 1px #CCC;
      padding: 40px 40px 60px;
      margin-top: 40px;
      border-radius: 4px;
    }

    .receipt-content .invoice-wrapper .payment-details span {
      color: #A9B0BB;
      display: block;
    }

    .receipt-content .invoice-wrapper .payment-details a {
      display: inline-block;
      margin-top: 5px;
    }

    .receipt-content .invoice-wrapper .line-items .print a {
      display: inline-block;
      border: 1px solid #9CB5D6;
      padding: 13px 13px;
      border-radius: 5px;
      color: #708DC0;
      font-size: 13px;
      -webkit-transition: all 0.2s linear;
      -moz-transition: all 0.2s linear;
      -ms-transition: all 0.2s linear;
      -o-transition: all 0.2s linear;
      transition: all 0.2s linear;
    }

    .receipt-content .invoice-wrapper .line-items .print a:hover {
      text-decoration: none;
      border-color: #333;
      color: #333;
    }

    .receipt-content {
      background: #ECEEF4;
    }

    @media (min-width: 1200px) {
      .receipt-content .container {
        width: 900px;
      }
    }

    .receipt-content .logo {
      text-align: center;
      margin-top: 50px;
    }

    .receipt-content .logo a {
      font-family: Myriad Pro, Lato, Helvetica Neue, Arial;
      font-size: 36px;
      letter-spacing: .1px;
      color: #555;
      font-weight: 300;
      -webkit-transition: all 0.2s linear;
      -moz-transition: all 0.2s linear;
      -ms-transition: all 0.2s linear;
      -o-transition: all 0.2s linear;
      transition: all 0.2s linear;
    }

    .receipt-content .invoice-wrapper .intro {
      line-height: 25px;
      color: #444;
    }

    .receipt-content .invoice-wrapper .payment-info {
      margin-top: 25px;
      padding-top: 15px;
    }

    .receipt-content .invoice-wrapper .payment-info span {
      color: #A9B0BB;
    }

    .receipt-content .invoice-wrapper .payment-info strong {
      display: block;
      color: #444;
      margin-top: 3px;
    }

    @media (max-width: 767px) {
      .receipt-content .invoice-wrapper .payment-info .text-right {
        text-align: left;
        margin-top: 20px;
      }
    }

    .receipt-content .invoice-wrapper .payment-details {
      border-top: 2px solid #EBECEE;
      margin-top: 30px;
      padding-top: 20px;
      line-height: 22px;
    }


    @media (max-width: 767px) {
      .receipt-content .invoice-wrapper .payment-details .text-right {
        text-align: left;
        margin-top: 20px;
      }
    }

    .receipt-content .invoice-wrapper .line-items {
      margin-top: 40px;
    }

    .receipt-content .invoice-wrapper .line-items .headers {
      color: #212529;
      font-size: 13px;
      letter-spacing: .3px;
      border-bottom: 2px solid #EBECEE;
      padding-bottom: 4px;
    }

    .receipt-content .invoice-wrapper .line-items .items {
      margin-top: 8px;
      border-bottom: 2px solid #EBECEE;
      padding-bottom: 8px;
    }

    .receipt-content .invoice-wrapper .line-items .items .item {
      padding: 10px 0;
      color: #696969;
      font-size: 15px;
    }

    @media (max-width: 767px) {
      .receipt-content .invoice-wrapper .line-items .items .item {
        font-size: 13px;
      }
    }

    .receipt-content .invoice-wrapper .line-items .items .item .amount {
      letter-spacing: 0.1px;
      color: #84868A;
      font-size: 16px;
    }

    @media (max-width: 767px) {
      .receipt-content .invoice-wrapper .line-items .items .item .amount {
        font-size: 13px;
      }
    }

    .receipt-content .invoice-wrapper .line-items .total {
      margin-top: 30px;
    }

    .receipt-content .invoice-wrapper .line-items .total .extra-notes {
      float: left;
      width: 40%;
      text-align: left;
      font-size: 13px;
      color: #7A7A7A;
      line-height: 20px;
    }

    @media (max-width: 767px) {
      .receipt-content .invoice-wrapper .line-items .total .extra-notes {
        width: 100%;
        margin-bottom: 30px;
        float: none;
      }
    }

    .receipt-content .invoice-wrapper .line-items .total .extra-notes strong {
      display: block;
      margin-bottom: 5px;
      color: #454545;
    }

    .receipt-content .invoice-wrapper .line-items .total .field {
      margin-bottom: 7px;
      font-size: 14px;
      color: #555;
    }

    .receipt-content .invoice-wrapper .line-items .total .field.grand-total {
      margin-top: 10px;
      font-size: 16px;
      font-weight: 500;
    }

    .receipt-content .invoice-wrapper .line-items .total .field.grand-total span {
      color: #20A720;
      font-size: 16px;
    }

    .receipt-content .invoice-wrapper .line-items .total .field span {
      display: inline-block;
      margin-left: 20px;
      min-width: 85px;
      color: #84868A;
      font-size: 15px;
    }

    .receipt-content .invoice-wrapper .line-items .print {
      margin-top: 50px;
      text-align: center;
    }



    .receipt-content .invoice-wrapper .line-items .print a i {
      margin-right: 3px;
      font-size: 14px;
    }

    .receipt-content .footer {
      margin-top: 40px;
      margin-bottom: 110px;
      text-align: center;
      font-size: 12px;
      color: #969CAD;
    }
  </style>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      $("#print").click(function() {
        //Hide all other elements other than printarea.
       
        window.print();
         $("#body").show();
      });
    });
  </script>
  @endsection