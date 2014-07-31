
@if ($paginator->getLastPage() > 1)
<?php $previousPage = ($paginator->getCurrentPage() > 1) ? $paginator->getCurrentPage() - 1 : 1; ?>  
<ul class="ui pagination menu">  
  <a href="{{ $paginator->getUrl(1) }}"
    {{ ($paginator->getCurrentPage() == 1) ? ' disabled' : '' }}>
    <i class="icon left arrow"></i> 首页
  </a>
  <a href="{{ $paginator->getUrl($previousPage) }}"
    {{ ($paginator->getCurrentPage() == 1) ? ' disabled' : '' }}>
    <i class="icon left arrow"></i> 上页
  </a>
  @for ($i = 1; $i <= $paginator->getLastPage(); $i++)
  <a href="{{ $paginator->getUrl($i) }}"
    class="item{{ ($paginator->getCurrentPage() == $i) ? ' active' : '' }}">
      {{ $i }}
  </a>
  @endfor
  <a href="{{ ($paginator->getCurrentPage() == $paginator->getLastPage())? $paginator->getUrl($paginator->getLastPage()):$paginator->getUrl($paginator->getCurrentPage()+1) }}"
    class="item{{ ($paginator->getCurrentPage()== $paginator->getLastPage()) ? ' disabled' : '' }}">
    下页 <i class="icon right arrow"></i>
  </a>
  <a href="{{ $paginator->getUrl($paginator->getLastPage()) }}"
    class="item{{ ($paginator->getCurrentPage() == $paginator->getLastPage()) ? ' disabled' : '' }}">
    尾页 <i class="icon right arrow"></i>
  </a>
</ul>  
@endif

