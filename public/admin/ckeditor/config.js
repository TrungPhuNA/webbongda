/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
    config.filebrowserBrowseUrl = '/doantotnghiep/public/admin/ckfinder/ckfinder.html';

    config.filebrowserImageBrowseUrl = '/doantotnghiep/public/admin/ckfinder/ckfinder.html?type=Images';

    config.filebrowserFlashBrowseUrl = '/doantotnghiep/public/admin/ckfinder/ckfinder.html?type=Flash';

    config.filebrowserUploadUrl = '/doantotnghiep/public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';

    config.filebrowserImageUploadUrl = '/doantotnghiep/public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';

    config.filebrowserFlashUploadUrl = '/doantotnghiep/public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';

};
