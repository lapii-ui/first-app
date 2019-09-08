/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/desktop/_common.js":
/*!*****************************************!*\
  !*** ./resources/js/desktop/_common.js ***!
  \*****************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Common =
/*#__PURE__*/
function () {
  function Common() {
    _classCallCheck(this, Common);
  }

  _createClass(Common, [{
    key: "toggleTable",
    value: function toggleTable($element, param1, param2) {
      $element.on("click", function () {
        var obj = $(this);

        if (obj.hasClass("glyphicon-plus")) {
          obj.hide();
          obj.next().show();
          obj.parents(param1).nextUntil(param1).not(param2).show('slow');
        } else {
          obj.hide();
          obj.prev().show();
          obj.parents(param1).nextUntil(param1).not(param2).hide();
        }
      });
    }
  }]);

  return Common;
}();

var common = new Common();
/* harmony default export */ __webpack_exports__["default"] = (common);

/***/ }),

/***/ "./resources/js/desktop/_uom.js":
/*!**************************************!*\
  !*** ./resources/js/desktop/_uom.js ***!
  \**************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _common__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./_common */ "./resources/js/desktop/_common.js");
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }



var UOM =
/*#__PURE__*/
function () {
  function UOM() {
    _classCallCheck(this, UOM);
  }

  _createClass(UOM, [{
    key: "toggleSwitch",
    value: function toggleSwitch($element) {
      $element.on('change', function () {
        var _switch = $(this).is(':checked');

        if (_switch == true) {
          $('.tb-uom').hide();
          $('.tb-group-uom').show('slow');
        } else {
          $('.tb-group-uom').hide();
          $('.tb-uom').show('slow');
        }
      });
    }
  }, {
    key: "defineUOM",
    value: function defineUOM($element) {
      $element.on('click', function () {
        var _this = $(this).closest('tr');

        var alt_qty = _this.find('input.alt-qty-value').val();

        var alt_uom = _this.find('.alt-uom-select').val().trim();

        var base_qty = _this.find('input.base-qty-value').val();

        var base_uom = _this.find('.base-uom-select').val().trim();

        $('.table-uom-list').append('<tr><td>' + alt_qty + '</td>' + '<td>' + alt_uom + '</td>' + '<td>Equal</td>' + '<td>' + base_qty + '</td>' + '<td>' + base_uom + '</td>' + '<td><a href="#" class="text-danger"><i class="fas fa-trash"></i></a></td></tr>'); // console.log(alt_uom);
      });
    }
  }]);

  return UOM;
}();

var uom = new UOM();
uom.toggleSwitch($('#switch'));
uom.defineUOM($('#btn-define-uom'));

/***/ }),

/***/ 2:
/*!********************************************!*\
  !*** multi ./resources/js/desktop/_uom.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\first-app\resources\js\desktop\_uom.js */"./resources/js/desktop/_uom.js");


/***/ })

/******/ });