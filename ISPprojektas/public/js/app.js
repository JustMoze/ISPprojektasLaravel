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
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! ./bootstrap */ "./resources/js/bootstrap.js");

for (var i = 0; i < document.querySelectorAll(".checked").length; i++) {
  document.querySelectorAll(".checked")[i].addEventListener("click", function () {
    var item = this.id;
    var count = this.id[0];
    var subid = item.substring(1);

    for (var i = 0; i < 5; i++) {
      if (i < count) {
        document.getElementById(i + 1 + subid).style.color = "#ed6663";
      } else {
        document.getElementById(i + 1 + subid).style.color = "black";
      }
    }

    document.querySelector("#rating").value = count;
  });
}

for (var i = 0; i < document.querySelectorAll(".ivetinta").length; i++) {
  if (i < 4) {
    document.getElementById(i + 1 + "one").style.color = "#ed6663";
  } else {
    document.getElementById(i + 1 + "one").style.color = "black";
  }
}

/***/ }),

/***/ "./resources/js/bootstrap.js":
/*!***********************************!*\
  !*** ./resources/js/bootstrap.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

window._ = __webpack_require__(/*! lodash */ "./node_modules/lodash/lodash.js");
/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: C:\\Users\\Aleksandras\\Documents\\KTU\\3kursas\\Is pagrindai\\Hotel Laravel\\ISPprojektasLaravel\\ISPprojektas\\package.json: Error while parsing JSON - Unexpected string in JSON at position 1077\n    at JSON.parse (<anonymous>)\n    at C:\\Users\\Aleksandras\\Documents\\KTU\\3kursas\\Is pagrindai\\Hotel Laravel\\ISPprojektasLaravel\\ISPprojektas\\node_modules\\@babel\\core\\lib\\config\\files\\package.js:57:20\n    at C:\\Users\\Aleksandras\\Documents\\KTU\\3kursas\\Is pagrindai\\Hotel Laravel\\ISPprojektasLaravel\\ISPprojektas\\node_modules\\@babel\\core\\lib\\config\\files\\utils.js:29:12\n    at cachedFunction (C:\\Users\\Aleksandras\\Documents\\KTU\\3kursas\\Is pagrindai\\Hotel Laravel\\ISPprojektasLaravel\\ISPprojektas\\node_modules\\@babel\\core\\lib\\config\\caching.js:33:19)\n    at findPackageData (C:\\Users\\Aleksandras\\Documents\\KTU\\3kursas\\Is pagrindai\\Hotel Laravel\\ISPprojektasLaravel\\ISPprojektas\\node_modules\\@babel\\core\\lib\\config\\files\\package.js:33:11)\n    at buildRootChain (C:\\Users\\Aleksandras\\Documents\\KTU\\3kursas\\Is pagrindai\\Hotel Laravel\\ISPprojektasLaravel\\ISPprojektas\\node_modules\\@babel\\core\\lib\\config\\config-chain.js:105:85)\n    at loadPrivatePartialConfig (C:\\Users\\Aleksandras\\Documents\\KTU\\3kursas\\Is pagrindai\\Hotel Laravel\\ISPprojektasLaravel\\ISPprojektas\\node_modules\\@babel\\core\\lib\\config\\partial.js:85:55)\n    at Object.loadPartialConfig (C:\\Users\\Aleksandras\\Documents\\KTU\\3kursas\\Is pagrindai\\Hotel Laravel\\ISPprojektasLaravel\\ISPprojektas\\node_modules\\@babel\\core\\lib\\config\\partial.js:110:18)\n    at Object.<anonymous> (C:\\Users\\Aleksandras\\Documents\\KTU\\3kursas\\Is pagrindai\\Hotel Laravel\\ISPprojektasLaravel\\ISPprojektas\\node_modules\\babel-loader\\lib\\index.js:144:26)\n    at Generator.next (<anonymous>)\n    at asyncGeneratorStep (C:\\Users\\Aleksandras\\Documents\\KTU\\3kursas\\Is pagrindai\\Hotel Laravel\\ISPprojektasLaravel\\ISPprojektas\\node_modules\\babel-loader\\lib\\index.js:3:103)\n    at _next (C:\\Users\\Aleksandras\\Documents\\KTU\\3kursas\\Is pagrindai\\Hotel Laravel\\ISPprojektasLaravel\\ISPprojektas\\node_modules\\babel-loader\\lib\\index.js:5:194)\n    at C:\\Users\\Aleksandras\\Documents\\KTU\\3kursas\\Is pagrindai\\Hotel Laravel\\ISPprojektasLaravel\\ISPprojektas\\node_modules\\babel-loader\\lib\\index.js:5:364\n    at new Promise (<anonymous>)\n    at Object.<anonymous> (C:\\Users\\Aleksandras\\Documents\\KTU\\3kursas\\Is pagrindai\\Hotel Laravel\\ISPprojektasLaravel\\ISPprojektas\\node_modules\\babel-loader\\lib\\index.js:5:97)\n    at Object.loader (C:\\Users\\Aleksandras\\Documents\\KTU\\3kursas\\Is pagrindai\\Hotel Laravel\\ISPprojektasLaravel\\ISPprojektas\\node_modules\\babel-loader\\lib\\index.js:60:18)\n    at Object.<anonymous> (C:\\Users\\Aleksandras\\Documents\\KTU\\3kursas\\Is pagrindai\\Hotel Laravel\\ISPprojektasLaravel\\ISPprojektas\\node_modules\\babel-loader\\lib\\index.js:55:12)");

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\Users\mozai\Desktop\ISPprojektasLaravel\ISPprojektas\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! C:\Users\mozai\Desktop\ISPprojektasLaravel\ISPprojektas\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });
