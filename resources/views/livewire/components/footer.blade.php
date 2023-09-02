<footer class="Page-footer">
    <div class="Page-footer-container">
        <div class="Page-footer-leftWrapper">
            <div class="Page-footer-logo"style="text-align:center;">
                <a aria-label="home page" href="{{ env('APP_URL') }}" data-cms-ai="0" style="font-size:18px">
                    <div style="display:inline-block;margin-top:5px;font-size:18px;font-weight:600;color:#ed1c24;">Surgewares</div>
                </a>
            </div>
            <div class="Page-footer-navigation">
                <nav class="FooterNavigation">
                    <ul class="FooterNavigation-items" data-column-count="4">
                        <li class="FooterNavigation-items-item">
                            <div class="FooterNavigationItem">
                                <div class="FooterNavigationItem-text">
                                    <a href="https://policies.google.com/privacy" target="_blank" data-cms-ai="0">Privacy</a>
                                </div>
                            </div>
                        </li>
                        <li class="FooterNavigation-items-item">
                            <div class="FooterNavigationItem">
                                <div class="FooterNavigationItem-text">
                                    <a href="https://policies.google.com/terms" target="_blank" data-cms-ai="0">Terms</a>
                                </div>
                            </div>
                        </li>
                        <li class="FooterNavigation-items-item">
                            <div class="FooterNavigationItem">
                                <div class="FooterNavigationItem-text">
                                    <a href="https://about.google/" target="_blank" data-cms-ai="0">About Surgewares</a>
                                </div>
                            </div>
                        </li>
                        <li class="FooterNavigation-items-item">
                            <div class="FooterNavigationItem">
                                <div class="FooterNavigationItem-text">
                                    <a href="{{ route(\App\Http\Controllers\RoutesController::$products) }}" target="_blank" data-cms-ai="0">Surgewares Products</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</footer>
