(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[5],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/Patrimonio.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/views/Patrimonio.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var vuex__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vuex */ "./node_modules/vuex/dist/vuex.esm.js");
function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; var ownKeys = Object.keys(source); if (typeof Object.getOwnPropertySymbols === 'function') { ownKeys = ownKeys.concat(Object.getOwnPropertySymbols(source).filter(function (sym) { return Object.getOwnPropertyDescriptor(source, sym).enumerable; })); } ownKeys.forEach(function (key) { _defineProperty(target, key, source[key]); }); } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  name: 'Patrimonio',
  computed: _objectSpread({
    items: function items() {
      return this.patrimonios;
    }
  }, Object(vuex__WEBPACK_IMPORTED_MODULE_0__["mapGetters"])('patrimonio', ['patrimonios'])),
  data: function data() {
    return {
      headers: [{
        sortable: true,
        text: 'NIP',
        value: 'nip'
      }, {
        sortable: true,
        text: 'Designação',
        value: 'designacao'
      }, {
        sortable: true,
        text: 'Localizacao',
        value: 'localizacao'
      }, {
        sortable: false,
        text: 'Data de aquisição',
        value: 'estado' // align: 'right'

      }]
    };
  },
  methods: _objectSpread({}, Object(vuex__WEBPACK_IMPORTED_MODULE_0__["mapActions"])('patrimonio', ['carregarBens']), {
    showPatrimonio: function showPatrimonio(item) {
      this.$router.push({
        name: 'Ver patrimonio',
        params: {
          id: item.id
        }
      });
    }
  }),
  mounted: function mounted() {
    this.carregarBens();
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/Patrimonio.vue?vue&type=template&id=195cdc92&":
/*!********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/views/Patrimonio.vue?vue&type=template&id=195cdc92& ***!
  \********************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "v-container",
    { attrs: { "fill-height": "", fluid: "", "grid-list-xl": "" } },
    [
      _c(
        "v-layout",
        { attrs: { wrap: "" } },
        [
          _c(
            "v-flex",
            { attrs: { md12: "" } },
            [
              _vm.patrimonios
                ? _c("v-data-table", {
                    attrs: {
                      headers: _vm.headers,
                      items: _vm.items,
                      "hide-actions": ""
                    },
                    scopedSlots: _vm._u(
                      [
                        {
                          key: "headerCell",
                          fn: function(ref) {
                            var header = ref.header
                            return [
                              _c("span", {
                                staticClass:
                                  "subheading font-weight-light text-success text--darken-3",
                                domProps: { textContent: _vm._s(header.text) }
                              })
                            ]
                          }
                        },
                        {
                          key: "items",
                          fn: function(ref) {
                            var item = ref.item
                            return [
                              _c("tr"),
                              _c(
                                "tr",
                                {
                                  on: {
                                    click: function($event) {
                                      return _vm.showPatrimonio(item)
                                    }
                                  }
                                },
                                [
                                  _c("td", [_vm._v(_vm._s(item.nip))]),
                                  _vm._v(" "),
                                  _c("td", [_vm._v(_vm._s(item.classe))]),
                                  _vm._v(" "),
                                  _c("td", [_vm._v(_vm._s(item.ugb))]),
                                  _vm._v(" "),
                                  _c("td", [
                                    _vm._v(_vm._s(item.data_aquisicao))
                                  ])
                                ]
                              )
                            ]
                          }
                        }
                      ],
                      null,
                      false,
                      2589028011
                    )
                  })
                : _vm._e()
            ],
            1
          )
        ],
        1
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./resources/js/views/Patrimonio.vue":
/*!*******************************************!*\
  !*** ./resources/js/views/Patrimonio.vue ***!
  \*******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Patrimonio_vue_vue_type_template_id_195cdc92___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Patrimonio.vue?vue&type=template&id=195cdc92& */ "./resources/js/views/Patrimonio.vue?vue&type=template&id=195cdc92&");
/* harmony import */ var _Patrimonio_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Patrimonio.vue?vue&type=script&lang=js& */ "./resources/js/views/Patrimonio.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Patrimonio_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Patrimonio_vue_vue_type_template_id_195cdc92___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Patrimonio_vue_vue_type_template_id_195cdc92___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/views/Patrimonio.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/views/Patrimonio.vue?vue&type=script&lang=js&":
/*!********************************************************************!*\
  !*** ./resources/js/views/Patrimonio.vue?vue&type=script&lang=js& ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Patrimonio_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./Patrimonio.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/Patrimonio.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Patrimonio_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/views/Patrimonio.vue?vue&type=template&id=195cdc92&":
/*!**************************************************************************!*\
  !*** ./resources/js/views/Patrimonio.vue?vue&type=template&id=195cdc92& ***!
  \**************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Patrimonio_vue_vue_type_template_id_195cdc92___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./Patrimonio.vue?vue&type=template&id=195cdc92& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/Patrimonio.vue?vue&type=template&id=195cdc92&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Patrimonio_vue_vue_type_template_id_195cdc92___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Patrimonio_vue_vue_type_template_id_195cdc92___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);