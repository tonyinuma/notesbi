<footer class="footer footer-light @if(isset($configData['footerType'])){{$configData['footerClass']}}@endif">
    <p class="clearfix mb-0">
        <span class="float-left d-inline-block">{{ date('Y') }} &copy; NotesBI</span>
        <span class="float-right d-sm-inline-block d-none">With Love
      <i class="bx bxs-heart pink mx-50 font-small-3"></i>by
      <a class="text-uppercase" href="https://www.linkedin.com/in/tony-id-b24832114/" target="_blank">Tony ID</a>
    </span>
        @if($configData['isScrollTop'] === true)
            <button class="btn btn-primary btn-icon scroll-top" type="button">
                <i class="bx bx-up-arrow-alt"></i>
            </button>
        @endif
    </p>
</footer>
