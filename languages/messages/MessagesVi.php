<?php
/** Vietnamese (Tiếng Việt)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Apple
 * @author Arisa
 * @author Baonguyen21022003
 * @author Cheers!
 * @author DHN
 * @author Kaganer
 * @author Minh Nguyen
 * @author Mxn
 * @author Neoneurone
 * @author Nguyễn Thanh Quang
 * @author Prenn
 * @author Skye Darcy
 * @author Thaisk
 * @author Thanhtai2009
 * @author Tmct
 * @author Trần Nguyễn Minh Huy
 * @author Trần Thế Trung
 * @author Tttrung
 * @author Vietbio
 * @author Vinhtantran
 * @author Vương Ngân Hà
 * @author Withoutaname
 * @author לערי ריינהארט
 */

$namespaceNames = array(
	NS_MEDIA            => 'Phương_tiện',
	NS_SPECIAL          => 'Đặc_biệt',
	NS_TALK             => 'Thảo_luận',
	NS_USER             => 'Thành_viên',
	NS_USER_TALK        => 'Thảo_luận_Thành_viên',
	NS_PROJECT_TALK     => 'Thảo_luận_$1',
	NS_FILE             => 'Tập_tin',
	NS_FILE_TALK        => 'Thảo_luận_Tập_tin',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Thảo_luận_MediaWiki',
	NS_TEMPLATE         => 'Bản_mẫu',
	NS_TEMPLATE_TALK    => 'Thảo_luận_Bản_mẫu',
	NS_HELP             => 'Trợ_giúp',
	NS_HELP_TALK        => 'Thảo_luận_Trợ_giúp',
	NS_CATEGORY         => 'Thể_loại',
	NS_CATEGORY_TALK    => 'Thảo_luận_Thể_loại',
);

$namespaceAliases = array(
	'Hình' => NS_FILE,
	'Thảo_luận_Hình' => NS_FILE_TALK,
	'Tiêu_bản' => NS_TEMPLATE,
	'Thảo_luận_Tiêu_bản' => NS_TEMPLATE_TALK,
);

$specialPageAliases = array(
	'Activeusers'               => array( 'Người_dùng_tích_cực' ),
	'Allmessages'               => array( 'Mọi_thông_điệp', 'Mọi_thông_báo' ),
	'AllMyUploads'              => array( 'Mọi_tập_tin_của_tôi', 'Mọi_tập_tin_tôi_tải_lên' ),
	'Allpages'                  => array( 'Mọi_bài' ),
	'ApiHelp'                   => array( 'Trợ_giúp_API' ),
	'Ancientpages'              => array( 'Trang_cũ' ),
	'Badtitle'                  => array( 'Tựa_đề_hỏng' ),
	'Blankpage'                 => array( 'Trang_trắng' ),
	'Block'                     => array( 'Cấm', 'Cấm_IP', 'Cấm_thành_viên', 'Cấm_người_dùng' ),
	'Booksources'               => array( 'Nguồn_sách' ),
	'BrokenRedirects'           => array( 'Đổi_hướng_sai' ),
	'Categories'                => array( 'Thể_loại' ),
	'ChangeEmail'               => array( 'Đổi_thư_điện_tử' ),
	'ChangePassword'            => array( 'Đổi_mật_khẩu' ),
	'ComparePages'              => array( 'So_sánh_trang' ),
	'Confirmemail'              => array( 'Xác_nhận_thư' ),
	'Contributions'             => array( 'Đóng_góp' ),
	'CreateAccount'             => array( 'Mở_tài_khoản', 'Đăng_ký', 'Đăng_kí' ),
	'Deadendpages'              => array( 'Trang_đường_cùng' ),
	'DeletedContributions'      => array( 'Đóng_góp_bị_xóa', 'Đóng_góp_bị_xoá' ),
	'Diff'                      => array( 'Khác', 'Khác_biệt' ),
	'DoubleRedirects'           => array( 'Đổi_hướng_kép' ),
	'EditWatchlist'             => array( 'Sửa_danh_sách_theo_dõi' ),
	'Emailuser'                 => array( 'Gửi_thư', 'Gửi_thư_điện_tử' ),
	'ExpandTemplates'           => array( 'Bung_bản_mẫu', 'Bung_tiêu_bản' ),
	'Export'                    => array( 'Xuất' ),
	'Fewestrevisions'           => array( 'Ít_phiên_bản_nhất' ),
	'FileDuplicateSearch'       => array( 'Tìm_tập_tin_trùng' ),
	'Filepath'                  => array( 'Đường_dẫn_tập_tin', 'Đường_dẫn_file' ),
	'Import'                    => array( 'Nhập' ),
	'Invalidateemail'           => array( 'Hủy_thư', 'Hủy_thư_điện_tử', 'Huỷ_thư', 'Huỷ_thư_điện_tử', 'Tắt_thư' ),
	'JavaScriptTest'            => array( 'Thử_JavaScript' ),
	'BlockList'                 => array( 'Danh_sách_cấm' ),
	'LinkSearch'                => array( 'Tìm_liên_kết' ),
	'Listadmins'                => array( 'Danh_sách_bảo_quản_viên', 'Danh_sách_admin' ),
	'Listbots'                  => array( 'Danh_sách_bot', 'Danh_sách_robot' ),
	'Listfiles'                 => array( 'Danh_sách_tập_tin', 'Danh_sách_hình' ),
	'Listgrouprights'           => array( 'Quyền_nhóm_người_dùng' ),
	'Listredirects'             => array( 'Trang_đổi_hướng' ),
	'ListDuplicatedFiles'       => array( 'Tập_tin_trùng_lắp' ),
	'Listusers'                 => array( 'Danh_sách_thành_viên' ),
	'Lockdb'                    => array( 'Khóa_CSDL', 'Khóa_cơ_sở_dữ_liệu', 'Khoá_CSDL', 'Khoá_cơ_sở_dữ_liệu' ),
	'Log'                       => array( 'Nhật_trình' ),
	'Lonelypages'               => array( 'Trang_mồ_côi' ),
	'Longpages'                 => array( 'Trang_dài' ),
	'MediaStatistics'           => array( 'Thống_kê_phương_tiện' ),
	'MergeHistory'              => array( 'Trộn_lịch_sử' ),
	'MIMEsearch'                => array( 'Tìm_MIME' ),
	'Mostcategories'            => array( 'Thể_loại_lớn_nhất' ),
	'Mostimages'                => array( 'Tập_tin_liên_kết_nhiều_nhất' ),
	'Mostinterwikis'            => array( 'Nhiều_liên_wiki_nhất', 'Nhiều_interwiki_nhất' ),
	'Mostlinked'                => array( 'Liên_kết_nhiều_nhất' ),
	'Mostlinkedcategories'      => array( 'Thể_loại_liên_kết_nhiều_nhất' ),
	'Mostlinkedtemplates'       => array( 'Bản_mẫu_liên_kết_nhiều_nhất', 'Tiêu_bản_liên_kết_nhiều_nhất' ),
	'Mostrevisions'             => array( 'Nhiều_phiên_bản_nhất' ),
	'Movepage'                  => array( 'Di_chuyển', 'Đổi_tên_trang' ),
	'Mycontributions'           => array( 'Đóng_góp_của_tôi', 'Tôi_đóng_góp' ),
	'MyLanguage'                => array( 'Ngôn_ngữ_tôi' ),
	'Mypage'                    => array( 'Trang_tôi', 'Trang_cá_nhân' ),
	'Mytalk'                    => array( 'Thảo_luận_tôi', 'Trang_thảo_luận_của_tôi' ),
	'Myuploads'                 => array( 'Tập_tin_tôi' ),
	'Newimages'                 => array( 'Tập_tin_mới', 'Hình_mới' ),
	'Newpages'                  => array( 'Trang_mới' ),
	'PagesWithProp'             => array( 'Trang_theo_thuộc_tính' ),
	'PageLanguage'              => array( 'Ngôn_ngữ_trang' ),
	'PasswordReset'             => array( 'Tái_tạo_mật_khẩu', 'Đặt_lại_mật_khẩu' ),
	'PermanentLink'             => array( 'Liên_kết_thường_trực' ),
	'Preferences'               => array( 'Tùy_chọn', 'Tuỳ_chọn' ),
	'Prefixindex'               => array( 'Tiền_tố' ),
	'Protectedpages'            => array( 'Trang_khóa', 'Trang_khoá' ),
	'Protectedtitles'           => array( 'Tựa_đề_bị_khóa', 'Tựa_đề_bị_khoá' ),
	'Randompage'                => array( 'Ngẫu_nhiên' ),
	'RandomInCategory'          => array( 'Ngẫu_nhiên_trong_thể_loại' ),
	'Randomredirect'            => array( 'Đổi_hướng_ngẫu_nhiên' ),
	'Randomrootpage'            => array( 'Trang_gốc_ngẫu_nhiên' ),
	'Recentchanges'             => array( 'Thay_đổi_gần_đây' ),
	'Recentchangeslinked'       => array( 'Thay_đổi_liên_quan' ),
	'Redirect'                  => array( 'Đổi_hướng' ),
	'ResetTokens'               => array( 'Đặt_lại_dấu_hiệu' ),
	'Revisiondelete'            => array( 'Xóa_phiên_bản', 'Xoá_phiên_bản' ),
	'RunJobs'                   => array( 'Chạy_việc' ),
	'Search'                    => array( 'Tìm_kiếm' ),
	'Shortpages'                => array( 'Trang_ngắn' ),
	'Specialpages'              => array( 'Trang_đặc_biệt' ),
	'Statistics'                => array( 'Thống_kê' ),
	'Tags'                      => array( 'Thẻ' ),
	'TrackingCategories'        => array( 'Thể_loại_theo_dõi' ),
	'Unblock'                   => array( 'Bỏ_cấm' ),
	'Uncategorizedcategories'   => array( 'Thể_loại_chưa_phân_loại' ),
	'Uncategorizedimages'       => array( 'Tập_tin_chưa_phân_loại', 'Hình_chưa_phân_loại' ),
	'Uncategorizedpages'        => array( 'Trang_chưa_phân_loại' ),
	'Uncategorizedtemplates'    => array( 'Bản_mẫu_chưa_phân_loại', 'Tiêu_bản_chưa_phân_loại' ),
	'Undelete'                  => array( 'Phục_hồi' ),
	'Unlockdb'                  => array( 'Mở_khóa_CSDL', 'Mở_khóa_cơ_sở_dữ_liệu', 'Mở_khoá_CSDL', 'Mở_khoá_cơ_sở_dữ_liệu' ),
	'Unusedcategories'          => array( 'Thể_loại_chưa_dùng' ),
	'Unusedimages'              => array( 'Tập_tin_chưa_dùng', 'Hình_chưa_dùng' ),
	'Unusedtemplates'           => array( 'Bản_mẫu_chưa_dùng', 'Tiêu_bản_chưa_dùng' ),
	'Unwatchedpages'            => array( 'Trang_chưa_theo_dõi' ),
	'Upload'                    => array( 'Tải_lên' ),
	'UploadStash'               => array( 'Hàng_đợi_tải_lên' ),
	'Userlogin'                 => array( 'Đăng_nhập' ),
	'Userlogout'                => array( 'Đăng_xuất' ),
	'Userrights'                => array( 'Quyền_thành_viên', 'Quyền_người_dùng' ),
	'Version'                   => array( 'Phiên_bản' ),
	'Wantedcategories'          => array( 'Thể_loại_cần_thiết' ),
	'Wantedfiles'               => array( 'Tập_tin_cần_thiết' ),
	'Wantedpages'               => array( 'Trang_cần_thiết' ),
	'Wantedtemplates'           => array( 'Bản_mẫu_cần_thiết', 'Tiêu_bản_cần_thiết' ),
	'Watchlist'                 => array( 'Danh_sách_theo_dõi' ),
	'Whatlinkshere'             => array( 'Liên_kết_đến_đây' ),
	'Withoutinterwiki'          => array( 'Không_liên_wiki', 'Không_interwiki' ),
);

$magicWords = array(
	'redirect'                  => array( '0', '#đổi', '#REDIRECT' ),
	'notoc'                     => array( '0', '__KHÔNG_MỤC_LỤC__', '__KHÔNGMỤCLỤC__', '__NOTOC__' ),
	'nogallery'                 => array( '0', '__KHÔNG_ALBUM__', '__KHÔNGALBUM__', '__NOGALLERY__' ),
	'forcetoc'                  => array( '0', '__LUÔN_MỤC_LỤC__', '__LUÔNMỤCLỤC__', '__FORCETOC__' ),
	'toc'                       => array( '0', '__MỤC_LỤC__', '__MỤCLỤC__', '__TOC__' ),
	'noeditsection'             => array( '0', '__KHÔNG_NÚT_SỬA_MỤC__', '__KHÔNGNÚTSỬAMỤC__', '__NOEDITSECTION__' ),
	'currentmonth'              => array( '1', 'THÁNG_NÀY', 'THÁNGNÀY', 'THÁNG_NÀY_2', 'THÁNGNÀY2', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonth1'             => array( '1', 'THÁNG_NÀY_1', 'THÁNGNÀY1', 'CURRENTMONTH1' ),
	'currentmonthname'          => array( '1', 'TÊN_THÁNG_NÀY', 'TÊNTHÁNGNÀY', 'CURRENTMONTHNAME' ),
	'currentmonthnamegen'       => array( '1', 'TÊN_DÀI_THÁNG_NÀY', 'TÊNDÀITHÁNGNÀY', 'CURRENTMONTHNAMEGEN' ),
	'currentmonthabbrev'        => array( '1', 'TÊN_NGẮN_THÁNG_NÀY', 'TÊNNGẮNTHÁNGNÀY', 'CURRENTMONTHABBREV' ),
	'currentday'                => array( '1', 'NGÀY_NÀY', 'NGÀYNÀY', 'CURRENTDAY' ),
	'currentday2'               => array( '1', 'NGÀY_NÀY_2', 'NGÀYNÀY2', 'CURRENTDAY2' ),
	'currentdayname'            => array( '1', 'TÊN_NGÀY_NÀY', 'TÊNNGÀYNÀY', 'CURRENTDAYNAME' ),
	'currentyear'               => array( '1', 'NĂM_NÀY', 'NĂMNÀY', 'CURRENTYEAR' ),
	'currenttime'               => array( '1', 'GIỜ_NÀY', 'GIỜNÀY', 'CURRENTTIME' ),
	'currenthour'               => array( '1', 'GIỜ_HIỆN_TẠI', 'GIỜHIỆNTẠI', 'CURRENTHOUR' ),
	'localmonth'                => array( '1', 'THÁNG_ĐỊA_PHƯƠNG', 'THÁNGĐỊAPHƯƠNG', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonth1'               => array( '1', 'THÁNG_ĐỊA_PHƯƠNG_1', 'THÁNGĐỊAPHƯƠNG1', 'LOCALMONTH1' ),
	'localmonthname'            => array( '1', 'TÊN_THÁNG_ĐỊA_PHƯƠNG', 'TÊNTHÁNGĐỊAPHƯƠNG', 'LOCALMONTHNAME' ),
	'localmonthabbrev'          => array( '1', 'THÁNG_ĐỊA_PHƯƠNG_TẮT', 'THÁNGĐỊAPHƯƠNGTẮT', 'LOCALMONTHABBREV' ),
	'localday'                  => array( '1', 'NGÀY_ĐỊA_PHƯƠNG', 'NGÀYĐỊAPHƯƠNG', 'LOCALDAY' ),
	'localday2'                 => array( '1', 'NGÀY_ĐỊA_PHƯƠNG_2', 'NGÀYĐỊAPHƯƠNG2', 'LOCALDAY2' ),
	'localdayname'              => array( '1', 'TÊN_NGÀY_ĐỊA_PHƯƠNG', 'TÊNNGÀYĐỊAPHƯƠNG', 'LOCALDAYNAME' ),
	'localyear'                 => array( '1', 'NĂM_ĐỊA_PHƯƠNG', 'NĂMĐỊAPHƯƠNG', 'LOCALYEAR' ),
	'localtime'                 => array( '1', 'THỜI_GIAN_ĐỊA_PHƯƠNG', 'THỜIGIANĐỊAPHƯƠNG', 'LOCALTIME' ),
	'localhour'                 => array( '1', 'GIỜ_ĐỊA_PHƯƠNG', 'GIỜĐỊAPHƯƠNG', 'LOCALHOUR' ),
	'numberofpages'             => array( '1', 'SỐ_TRANG', 'SỐTRANG', 'NUMBEROFPAGES' ),
	'numberofarticles'          => array( '1', 'SỐ_BÀI', 'SỐBÀI', 'NUMBEROFARTICLES' ),
	'numberoffiles'             => array( '1', 'SỐ_TẬP_TIN', 'SỐTẬPTIN', 'NUMBEROFFILES' ),
	'numberofusers'             => array( '1', 'SỐ_THÀNH_VIÊN', 'SỐTHÀNHVIÊN', 'NUMBEROFUSERS' ),
	'numberofactiveusers'       => array( '1', 'SỐ_THÀNH_VIÊN_TÍCH_CỰC', 'SỐTHÀNHVIÊNTÍCHCỰC', 'NUMBEROFACTIVEUSERS' ),
	'numberofedits'             => array( '1', 'SỐ_SỬA_ĐỔI', 'SỐSỬAĐỔI', 'NUMBEROFEDITS' ),
	'pagename'                  => array( '1', 'TÊN_TRANG', 'TÊNTRANG', 'PAGENAME' ),
	'pagenamee'                 => array( '1', 'TÊN_TRANG_2', 'TÊNTRANG2', 'PAGENAMEE' ),
	'namespace'                 => array( '1', 'KHÔNG_GIAN_TÊN', 'KHÔNGGIANTÊN', 'NAMESPACE' ),
	'namespacenumber'           => array( '1', 'SỐ_KHÔNG_GIAN_TÊN', 'SỐKHÔNGGIANTÊN', 'NAMESPACENUMBER' ),
	'talkspace'                 => array( '1', 'KGT_THẢO_LUẬN', 'KGTTHẢOLUẬN', 'TALKSPACE' ),
	'subjectspace'              => array( '1', 'KGT_NỘI_DUNG', 'KGTNỘIDUNG', 'SUBJECTSPACE', 'ARTICLESPACE' ),
	'fullpagename'              => array( '1', 'TÊN_TRANG_ĐỦ', 'TÊNTRANGĐỦ', 'FULLPAGENAME' ),
	'subpagename'               => array( '1', 'TÊN_TRANG_PHỤ', 'TÊNTRANGPHỤ', 'SUBPAGENAME' ),
	'basepagename'              => array( '1', 'TÊN_TRANG_GỐC', 'TÊNTRANGGỐC', 'BASEPAGENAME' ),
	'talkpagename'              => array( '1', 'TÊN_TRANG_THẢO_LUẬN', 'TÊNTRANGTHẢOLUẬN', 'TALKPAGENAME' ),
	'subjectpagename'           => array( '1', 'TÊN_TRANG_NỘI_DUNG', 'TÊNTRANGNỘIDUNG', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ),
	'msg'                       => array( '0', 'NHẮN:', 'MSG:' ),
	'subst'                     => array( '0', 'THẾ:', 'SUBST:' ),
	'safesubst'                 => array( '0', 'THẾ_AN_TOÀN:', 'SAFESUBST:' ),
	'msgnw'                     => array( '0', 'NHẮN_MỚI:', 'NHẮNMỚI:', 'MSGNW:' ),
	'img_thumbnail'             => array( '1', 'nhỏ', 'thumbnail', 'thumb' ),
	'img_manualthumb'           => array( '1', 'nhỏ=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'                 => array( '1', 'phải', 'right' ),
	'img_left'                  => array( '1', 'trái', 'left' ),
	'img_none'                  => array( '1', 'không', 'none' ),
	'img_center'                => array( '1', 'giữa', 'center', 'centre' ),
	'img_framed'                => array( '1', 'khung', 'framed', 'enframed', 'frame' ),
	'img_frameless'             => array( '1', 'không_khung', 'frameless' ),
	'img_lang'                  => array( '1', 'tiếng=$1', 'ngôn_ngữ=$1', 'lang=$1' ),
	'img_page'                  => array( '1', 'trang=$1', 'trang_$1', 'page=$1', 'page $1' ),
	'img_upright'               => array( '1', 'đứng', 'đứng=$1', 'đứng_$1', 'upright', 'upright=$1', 'upright $1' ),
	'img_border'                => array( '1', 'viền', 'border' ),
	'img_baseline'              => array( '1', 'chân-chữ', 'baseline' ),
	'img_sub'                   => array( '1', 'chỉ-số-dưới', 'sub' ),
	'img_super'                 => array( '1', 'chỉ-số-trên', 'super', 'sup' ),
	'img_top'                   => array( '1', 'trên', 'top' ),
	'img_text_top'              => array( '1', 'trên-chữ', 'text-top' ),
	'img_middle'                => array( '1', 'nửa-chiều-cao', 'middle' ),
	'img_bottom'                => array( '1', 'dưới', 'bottom' ),
	'img_text_bottom'           => array( '1', 'dưới-chữ', 'text-bottom' ),
	'img_link'                  => array( '1', 'liên_kết=$1', 'link=$1' ),
	'img_alt'                   => array( '1', 'thế=$1', 'thay_thế=$1', 'alt=$1' ),
	'img_class'                 => array( '1', 'lớp=$1', 'class=$1' ),
	'int'                       => array( '0', 'NỘI:', 'INT:' ),
	'sitename'                  => array( '1', 'TÊN_MẠNG', 'TÊNMẠNG', 'SITENAME' ),
	'ns'                        => array( '0', 'KGT:', 'NS:' ),
	'localurl'                  => array( '0', 'URL_ĐỊA_PHƯƠNG:', 'URLĐỊAPHƯƠNG:', 'LOCALURL:' ),
	'articlepath'               => array( '0', 'ĐƯỜNG_DẪN_BÀI', 'ĐƯỜNGDẪNBÀI', 'LỐI_BÀI', 'LỐIBÀI', 'ARTICLEPATH' ),
	'pageid'                    => array( '0', 'ID_TRANG', 'IDTRANG', 'PAGEID' ),
	'server'                    => array( '0', 'MÁY_CHỦ', 'MÁYCHỦ', 'SERVER' ),
	'servername'                => array( '0', 'TÊN_MÁY_CHỦ', 'TÊNMÁYCHỦ', 'SERVERNAME' ),
	'scriptpath'                => array( '0', 'ĐƯỜNG_DẪN_KỊCH_BẢN', 'ĐƯỜNGDẪNKỊCHBẢN', 'ĐƯỜNG_DẪN_SCRIPT', 'ĐƯỜNGDẪNSCRIPT', 'SCRIPTPATH' ),
	'stylepath'                 => array( '0', 'ĐƯỜNG_DẪN_KIỂU', 'ĐƯỜNGDẪNKIỂU', 'STYLEPATH' ),
	'grammar'                   => array( '0', 'NGỮ_PHÁP:', 'NGỮPHÁP:', 'GRAMMAR:' ),
	'gender'                    => array( '0', 'GIỐNG:', 'GENDER:' ),
	'notitleconvert'            => array( '0', '__KHÔNG_CHUYỂN_TÊN__', '__KHÔNGCHUYỂNTÊN__', '__NOTITLECONVERT__', '__NOTC__' ),
	'nocontentconvert'          => array( '0', '__KHÔNG_CHUYỂN_NỘI_DUNG__', '__KHÔNGCHUYỂNNỘIDUNG__', '__NOCONTENTCONVERT__', '__NOCC__' ),
	'currentweek'               => array( '1', 'TUẦN_NÀY', 'TUẦNNÀY', 'CURRENTWEEK' ),
	'localweek'                 => array( '1', 'TUẦN_ĐỊA_PHƯƠNG', 'TUẦNĐỊAPHƯƠNG', 'LOCALWEEK' ),
	'revisionid'                => array( '1', 'SỐ_BẢN', 'SỐBẢN', 'REVISIONID' ),
	'revisionday'               => array( '1', 'NGÀY_BẢN', 'NGÀYBẢN', 'REVISIONDAY' ),
	'revisionday2'              => array( '1', 'NGÀY_BẢN_2', 'NGÀYBẢN2', 'REVISIONDAY2' ),
	'revisionmonth'             => array( '1', 'THÁNG_BẢN', 'THÁNGBẢN', 'REVISIONMONTH' ),
	'revisionmonth1'            => array( '1', 'THÁNG_BẢN_1', 'THÁNGBẢN1', 'REVISIONMONTH1' ),
	'revisionyear'              => array( '1', 'NĂM_BẢN', 'NĂMBẢN', 'REVISIONYEAR' ),
	'revisiontimestamp'         => array( '1', 'MỐC_THỜI_GIAN_BẢN', 'MỐCTHỜIGIANBẢN', 'DẤU_THỜI_GIAN_BẢN', 'DẤUTHỜIGIANBẢN', 'REVISIONTIMESTAMP' ),
	'revisionuser'              => array( '1', 'NGƯỜI_DÙNG_BẢN', 'NGƯỜIDÙNGBẢN', 'REVISIONUSER' ),
	'revisionsize'              => array( '1', 'CỠ_PHIÊN_BẢN', 'CỠPHIÊNBẢN', 'REVISIONSIZE' ),
	'plural'                    => array( '0', 'SỐ_NHIỀU:', 'SỐNHIỀU:', 'PLURAL:' ),
	'fullurl'                   => array( '0', 'URL_ĐỦ:', 'URLĐỦ:', 'FULLURL:' ),
	'canonicalurl'              => array( '0', 'URL_CHUẨN:', 'URLCHUẨN:', 'CANONICALURL:' ),
	'lcfirst'                   => array( '0', 'CHỮ_ĐẦU_HOA:', 'CHỮĐẦUHOA:', 'LCFIRST:' ),
	'ucfirst'                   => array( '0', 'CHỮ_ĐẦU_THƯỜNG:', 'CHỮĐẦUTHƯỜNG:', 'UCFIRST:' ),
	'lc'                        => array( '0', 'CHỮ_HOA:', 'CHỮHOA:', 'LC:' ),
	'uc'                        => array( '0', 'CHỮ_THƯỜNG:', 'CHỮTHƯỜNG:', 'UC:' ),
	'displaytitle'              => array( '1', 'TÊN_HIỂN_THỊ', 'TÊNHIỂNTHỊ', 'DISPLAYTITLE' ),
	'newsectionlink'            => array( '1', '__LIÊN_KẾT_MỤC_MỚI__', '__LIÊNKẾTMỤCMỚI__', '__NEWSECTIONLINK__' ),
	'nonewsectionlink'          => array( '1', '__KHÔNG_LIÊN_KẾT_MỤC_MỚI__', '__KHÔNGLIÊNKẾTMỤCMỚI__', '__NONEWSECTIONLINK__' ),
	'currentversion'            => array( '1', 'BẢN_NÀY', 'BẢNNÀY', 'CURRENTVERSION' ),
	'urlencode'                 => array( '0', 'MÃ_HÓA_URL:', 'MÃHÓAURL:', 'MÃ_HOÁ_URL:', 'MÃHOÁURL:', 'URLENCODE:' ),
	'anchorencode'              => array( '0', 'MÃ_HÓA_NEO', 'MÃHÓANEO', 'MÃ_HOÁ_NEO', 'MÃHOÁNEO', 'ANCHORENCODE' ),
	'currenttimestamp'          => array( '1', 'MỐC_THỜI_GIAN_NÀY', 'MỐCTHỜIGIANNÀY', 'DẤU_THỜI_GIAN_NÀY', 'DẤUTHỜIGIANNÀY', 'CURRENTTIMESTAMP' ),
	'localtimestamp'            => array( '1', 'MỐC_THỜI_GIAN_ĐỊA_PHƯƠNG', 'MỐCTHỜIGIANĐỊAPHƯƠNG', 'DẤU_THỜI_GIAN_ĐỊA_PHƯƠNG', 'DẤUTHỜIGIANĐỊAPHƯƠNG', 'LOCALTIMESTAMP' ),
	'directionmark'             => array( '1', 'DẤU_HƯỚNG_VIẾT', 'DẤUHƯỚNGVIẾT', 'DIRECTIONMARK', 'DIRMARK' ),
	'language'                  => array( '0', '#NGÔN_NGỮ:', '#NGÔNNGỮ:', '#LANGUAGE:' ),
	'contentlanguage'           => array( '1', 'NGÔN_NGỮ_NỘI_DUNG', 'NGÔNNGỮNỘIDUNG', 'CONTENTLANGUAGE', 'CONTENTLANG' ),
	'pagesinnamespace'          => array( '1', 'CỠ_KHÔNG_GIAN_TÊN:', 'CỠKHÔNGGIANTÊN:', 'CỠ_KGT:', 'CỠKGT:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ),
	'numberofadmins'            => array( '1', 'SỐ_BẢO_QUẢN_VIÊN', 'SỐBẢOQUẢNVIÊN', 'SỐ_QUẢN_LÝ', 'SỐQUẢNLÝ', 'SỐ_QUẢN_LÍ', 'SỐQUẢNLÍ', 'NUMBEROFADMINS' ),
	'formatnum'                 => array( '0', 'PHÂN_CHIA_SỐ', 'PHÂNCHIASỐ', 'FORMATNUM' ),
	'special'                   => array( '0', 'đặc_biệt', 'special' ),
	'defaultsort'               => array( '1', 'XẾP_MẶC_ĐỊNH:', 'XẾPMẶCĐỊNH:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ),
	'filepath'                  => array( '0', 'ĐƯỜNG_DẪN_TẬP_TIN', 'ĐƯỜNGDẪNTẬPTIN', 'FILEPATH:' ),
	'tag'                       => array( '0', 'thẻ', 'tag' ),
	'hiddencat'                 => array( '1', '__THỂ_LOẠI_ẨN__', '__THỂLOẠIẨN__', '__HIDDENCAT__' ),
	'pagesincategory'           => array( '1', 'CỠ_THỂ_LOẠI', 'CỠTHỂLOẠI', 'PAGESINCATEGORY', 'PAGESINCAT' ),
	'pagesize'                  => array( '1', 'CỠ_TRANG', 'CỠTRANG', 'PAGESIZE' ),
	'index'                     => array( '1', '__CHỈ_MỤC__', '__CHỈMỤC__', '__INDEX__' ),
	'noindex'                   => array( '1', '__KHÔNG_CHỈ_MỤC__', '__KHÔNGCHỈMỤC__', '__NOINDEX__' ),
	'numberingroup'             => array( '1', 'CỠ_NHÓM', 'CỠNHÓM', 'NUMBERINGROUP', 'NUMINGROUP' ),
	'staticredirect'            => array( '1', '__ĐỔI_HƯỚNG_NHẤT_ĐỊNH__', '__ĐỔIHƯỚNGNHẤTĐỊNH__', '__STATICREDIRECT__' ),
	'protectionlevel'           => array( '1', 'MỨC_KHÓA', 'MỨCKHÓA', 'MỨC_KHOÁ', 'MỨCKHOÁ', 'PROTECTIONLEVEL' ),
	'cascadingsources'          => array( '1', 'NGUỒN_THEO_TẦNG', 'NGUỒNTHEOTẦNG', 'CASCADINGSOURCES' ),
	'formatdate'                => array( '0', 'định_dạng_ngày', 'địnhdạngngày', 'formatdate', 'dateformat' ),
	'url_path'                  => array( '0', 'ĐƯỜNG_DẪN', 'ĐƯỜNGDẪN', 'PATH' ),
	'url_query'                 => array( '0', 'TRUY_VẤN', 'TRUYVẤN', 'QUERY' ),
	'defaultsort_noerror'       => array( '0', 'không_lỗi', 'noerror' ),
	'defaultsort_noreplace'     => array( '0', 'không_thay_thế', 'noreplace' ),
	'pagesincategory_all'       => array( '0', 'tất_cả', 'all' ),
	'pagesincategory_pages'     => array( '0', 'trang', 'pages' ),
	'pagesincategory_subcats'   => array( '0', 'thể_loại_con', 'subcats' ),
	'pagesincategory_files'     => array( '0', 'tập_tin', 'files' ),
);

$datePreferences = array(
	'default',
	'vi normal',
	'vi spelloutmonth',
	'vi shortcolon',
	'vi shorth',
	'ISO 8601',
);

$defaultDateFormat = 'vi normal';

$dateFormats = array(
	'vi normal time' => 'H:i',
	'vi normal date' => '"ngày" j "tháng" n "năm" Y',
	'vi normal both' => 'H:i, "ngày" j "tháng" n "năm" Y',

	'vi spelloutmonth time' => 'H:i',
	'vi spelloutmonth date' => '"ngày" j xg "năm" Y',
	'vi spelloutmonth both' => 'H:i, "ngày" j xg "năm" Y',

	'vi shortcolon time' => 'H:i',
	'vi shortcolon date' => 'j/n/Y',
	'vi shortcolon both' => 'H:i, j/n/Y',

	'vi shorth time' => 'H"h"i',
	'vi shorth date' => 'j/n/Y',
	'vi shorth both' => 'H"h"i, j/n/Y',
);

$datePreferenceMigrationMap = array(
	'default',
	'vi normal',
	'vi normal',
	'vi normal',
);


$linkTrail = "/^([a-zàâçéèêîôûäëïöüùÇÉÂÊÎÔÛÄËÏÖÜÀÈÙ]+)(.*)$/sDu";
$separatorTransformTable = array( ',' => '.', '.' => ',' );

