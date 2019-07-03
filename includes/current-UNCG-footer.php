<?php
/**
 * OreTech Footer Template
 */



?>
<div id="footer-content" class="uk-section-default uk-section uk-section-xsmall">
    <div class="uk-container">
        <div class="uk-grid-margin uk-grid">
            <div class="uk-width-expand@m">
                <div class="footer-left">
                    <p><a class="emergency" title="Spartan Alert" href="https://spartanalert.uncg.edu">Emergency Info</a></p>
                    <?php 
						global $uncg_unit_options;
						$uncg_unit_settings = get_option( 'uncg_unit_options', $uncg_unit_options );
						echo $uncg_unit_settings['addressHTML'];
					?>
                </div>
            </div>
            
            <div class="uk-grid-item-match uk-flex-middle uk-width-expand@m">
                <div class="uk-panel">            
                    <div class="uk-margin uk-text-center footer-middle">
                        <img class="el-image" alt data-src="/rincuncg/images/uncg_hrzntl_footer.svg" uk-img>    
    
                    </div>

                </div>
            </div>

            <div class="uk-grid-item-match uk-flex-middle uk-width-expand@m">
                <div class="uk-panel">            
                    <div class="uk-margin footer-right">
                        <div class="footer-social">
                            <ul>
                                <li class="social"><a href="https://www.facebook.com/uncg1891/"><img src="/rincuncg/images/FB.svg" alt="Facebook"></a></li>
                                <li class="social"><a href="https://twitter.com/UNCG"><img src="/rincuncg/images/Twitter.svg" alt="Twitter"></a></li>
                                <li class="social"><a href="https://www.instagram.com/uncg/"><img src="/rincuncg/images/Instagram.svg" alt="Instagram"></a></li>
                                <li class="social"><a href="https://www.linkedin.com/school/uncg/"><img src="/rincuncg/images/Linkedin.svg" alt="Linkedin"></a></li>
                                <li class="social"><a href="https://www.youtube.com/uncg"><img src="/rincuncg/images/YT.svg" alt="Youtube"></a></li>
                                <li class="social"><a href="https://www.snapchat.com/add/uncgreensboro"><img src="/rincuncg/images/Snapchat.svg" alt="Snapchat"></a></li>
                            </ul>
                        </div>
                        <img class="el-image" alt data-src="/rincuncg/images/unc_system_logo.svg" uk-img>    
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-margin-remove-top uk-margin-remove-bottom uk-grid-margin uk-margin-remove-top uk-margin-remove-bottom" uk-grid>
            <div class="uk-width-1-1@m">
                <div class="uk-margin uk-margin-remove-top uk-margin-remove-bottom uk-text-center">
                    <p>Copyright © <?php echo date("Y"); ?>. UNC Greensboro. All rights reserved. | <a href="/privacy-policy">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </div>
    
</div>
