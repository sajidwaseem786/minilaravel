                <nav class="top-bar" data-topbar role="navigation">
                    <ul class="title-area">
                        <li class="name">
                            <a class="other" href="https://sivarfacturas.fiomega.net/backend/"><img src="{{asset('img/LG.png')}}" alt="GuateFacturas"></a>

                        </li>

                    </ul>

        <section class="top-bar-section">
                  <!-- Right Nav Section -->
            <ul class="right">
   <li id="back"></li>
            @guest
      <li><a  href="{{ route('login') }}">{{ __('Acceso') }}</a></li>
                         
                        @else
                          <li><a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                
                            </li>
                        @endguest
                        
            </ul>
          </section>
                </nav>
                
                        