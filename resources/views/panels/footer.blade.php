<footer class="footer footer-light @if(isset($configData['footerType'])){{$configData['footerClass']}}@endif">
  <p class="clearfix mb-0">
    <span class="float-left d-inline-block">2020 &copy; MOTEL-GROUP</span>
    <span class="float-right d-sm-inline-block d-none">Développé par <a class="text-uppercase" href="https://www.yannchapuis.fr" target="_blank">Yann CHAPUIS</a>
    </span>
    @if($configData['isScrollTop'] === true)
    <button class="btn btn-primary btn-icon scroll-top" type="button">
      <i class="bx bx-up-arrow-alt"></i>
    </button>
    @endif
  </p>
</footer>
