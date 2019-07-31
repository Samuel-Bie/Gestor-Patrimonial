(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[4],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/NewPatrimonio.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/views/NewPatrimonio.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var vuex__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vuex */ "./node_modules/vuex/dist/vuex.esm.js");
function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance"); }

function _iterableToArray(iter) { if (Symbol.iterator in Object(iter) || Object.prototype.toString.call(iter) === "[object Arguments]") return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = new Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } }

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
  data: function data() {
    return {
      alert: true,
      active_sessao1: true,
      active_sessao2: false,
      active_sessao3: false,
      active_sessao4: false,
      // tipoNovo:'Veiculo',
      tipoNovo: null,
      inicialData: {},
      identificacao: {},
      adicional: {},
      fotos: []
    };
  },
  computed: _objectSpread({}, Object(vuex__WEBPACK_IMPORTED_MODULE_0__["mapGetters"])({
    loading: 'getLoading',
    created: 'patrimoniomanagement/getCreatedPatrimonio',
    failed: 'patrimoniomanagement/getCreationErrors'
  }), {
    alertStatus: function alertStatus() {
      if (this.created) return 'success';
      if (this.failed) return 'red';
    },
    aletrText: function aletrText() {
      if (this.created) return 'Patrimonio criado';
      if (this.failed) return 'Erro';
    }
  }),
  created: function created() {
    this.UGEs();
    this.UGBs();
    this.Classificador();
    this.FormasAquisicao();
  },
  methods: _objectSpread({}, Object(vuex__WEBPACK_IMPORTED_MODULE_0__["mapActions"])({
    UGEs: 'general/carregarUGEs',
    UGBs: 'general/carregarUGBs',
    Classificador: 'general/carregarClassificador',
    FormasAquisicao: 'general/carregarFormasAquisicao',
    criarBem: 'patrimoniomanagement/createBem'
  }), Object(vuex__WEBPACK_IMPORTED_MODULE_0__["mapActions"])('patrimonio', ['carregarBens', 'carregarBem']), {
    showPatrimonio: function showPatrimonio(item) {
      this.carregarBens();
      this.$router.push({
        name: 'Ver patrimonio',
        params: {
          id: item.id
        }
      });
    },
    goto1: function goto1() {
      this.active_sessao1 = true;
      this.active_sessao2 = false;
      this.active_sessao3 = false;
      this.active_sessao4 = false;
    },
    goto2: function goto2() {
      this.active_sessao1 = false;
      this.active_sessao2 = true;
      this.active_sessao3 = false;
      this.active_sessao4 = false;
    },
    goto3: function goto3() {
      this.active_sessao1 = false;
      this.active_sessao2 = false;
      this.active_sessao3 = true;
      this.active_sessao4 = false;
    },
    gotoFotos: function gotoFotos() {
      this.active_sessao1 = false;
      this.active_sessao2 = false;
      this.active_sessao3 = false;
      this.active_sessao4 = true;
    },
    changeTipo: function changeTipo(tipo) {
      this.tipoNovo = tipo;
      this.identificacao = {};
      this.adicional = {};
    },
    changeInicialData: function changeInicialData(dados) {
      this.inicialData = dados;
    },
    changeIdentificacao: function changeIdentificacao(dados) {
      this.identificacao = dados;
    },
    changeAdicional: function changeAdicional(dados) {
      this.adicional = dados;
    },
    fileSaved: function fileSaved(id) {
      this.fotos.push(id);
    },
    enviar: function enviar() {
      var dados = {
        tipo: this.tipoNovo,
        inicial: _objectSpread({}, this.inicialData),
        identificacao: _objectSpread({}, this.identificacao),
        adicional: _objectSpread({}, this.adicional),
        arquivos: _toConsumableArray(this.fotos)
      };
      this.criarBem(dados);
    }
  }),
  watch: {
    created: function created(val) {
      if (val !== null) {
        this.showPatrimonio(val);
      }
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/NewPatrimonio.vue?vue&type=template&id=63652e89&":
/*!***********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/views/NewPatrimonio.vue?vue&type=template&id=63652e89& ***!
  \***********************************************************************************************************************************************************************************************************/
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
    "div",
    [
      !_vm.loading
        ? _c(
            "v-flex",
            [
              _c(
                "v-container",
                { attrs: { "grid-list-md": "", "text-xs-left": "" } },
                [
                  _c(
                    "v-layout",
                    { attrs: { row: "", wrap: "" } },
                    [
                      _vm.created || _vm.failed
                        ? _c(
                            "v-flex",
                            { attrs: { xs10: "", sm6: "" } },
                            [
                              _c(
                                "v-alert",
                                {
                                  attrs: {
                                    dismissible: "",
                                    color: _vm.alertStatus,
                                    border: "left",
                                    elevation: "2",
                                    "colored-border": ""
                                  },
                                  model: {
                                    value: _vm.alert,
                                    callback: function($$v) {
                                      _vm.alert = $$v
                                    },
                                    expression: "alert"
                                  }
                                },
                                [
                                  _vm._v(
                                    "\n                        " +
                                      _vm._s(_vm.aletrText) +
                                      "\n                    "
                                  )
                                ]
                              )
                            ],
                            1
                          )
                        : _vm._e(),
                      _vm._v(" "),
                      _vm.active_sessao1
                        ? _c("v-flex", { attrs: { xs12: "" } }, [
                            _c(
                              "div",
                              { staticClass: "px-0" },
                              [
                                _c("patrimonio-new-form-sessao1", {
                                  attrs: { dados: _vm.inicialData },
                                  on: {
                                    validado: _vm.goto2,
                                    dados_atualizados: _vm.changeInicialData
                                  }
                                })
                              ],
                              1
                            )
                          ])
                        : _vm._e(),
                      _vm._v(" "),
                      _vm.active_sessao2
                        ? _c("v-flex", { attrs: { xs12: "" } }, [
                            _c(
                              "div",
                              { staticClass: "px-0" },
                              [
                                _c("patrimonio-new-form-sessao2", {
                                  attrs: {
                                    tipo: _vm.tipoNovo,
                                    identificacao: _vm.identificacao
                                  },
                                  on: {
                                    dados_atualizados: _vm.changeIdentificacao,
                                    seletedTipo: _vm.changeTipo,
                                    validado: _vm.goto3,
                                    back: _vm.goto1
                                  }
                                })
                              ],
                              1
                            )
                          ])
                        : _vm._e(),
                      _vm._v(" "),
                      _vm.active_sessao3
                        ? _c("v-flex", { attrs: { xs12: "" } }, [
                            _c(
                              "div",
                              { staticClass: "px-0" },
                              [
                                _c("patrimonio-new-form-sessao3", {
                                  attrs: {
                                    tipo: _vm.tipoNovo,
                                    adicional: _vm.adicional
                                  },
                                  on: {
                                    dados_atualizados: _vm.changeAdicional,
                                    validado: _vm.gotoFotos,
                                    back: _vm.goto2
                                  }
                                })
                              ],
                              1
                            )
                          ])
                        : _vm._e(),
                      _vm._v(" "),
                      _vm.active_sessao4
                        ? _c("v-flex", { attrs: { xs12: "" } }, [
                            _c(
                              "div",
                              { staticClass: "px-0" },
                              [
                                _c("patrimonio-new-form-sessao-fotos", {
                                  on: {
                                    fileSaved: _vm.fileSaved,
                                    validado: _vm.enviar,
                                    back: _vm.goto3
                                  }
                                })
                              ],
                              1
                            )
                          ])
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
        : _c(
            "div",
            [
              _c(
                "material-card",
                { attrs: { color: "info", title: "Carregando" } },
                [
                  _c(
                    "v-card-text",
                    [
                      _c(
                        "v-container",
                        {
                          staticClass: "pa-0",
                          attrs: { "grid-list-xl": "", fluid: "" }
                        },
                        [
                          [
                            _c("v-progress-linear", {
                              attrs: { indeterminate: true }
                            })
                          ]
                        ],
                        2
                      )
                    ],
                    1
                  )
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

/***/ "./resources/js/views/NewPatrimonio.vue":
/*!**********************************************!*\
  !*** ./resources/js/views/NewPatrimonio.vue ***!
  \**********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _NewPatrimonio_vue_vue_type_template_id_63652e89___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./NewPatrimonio.vue?vue&type=template&id=63652e89& */ "./resources/js/views/NewPatrimonio.vue?vue&type=template&id=63652e89&");
/* harmony import */ var _NewPatrimonio_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./NewPatrimonio.vue?vue&type=script&lang=js& */ "./resources/js/views/NewPatrimonio.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _NewPatrimonio_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _NewPatrimonio_vue_vue_type_template_id_63652e89___WEBPACK_IMPORTED_MODULE_0__["render"],
  _NewPatrimonio_vue_vue_type_template_id_63652e89___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/views/NewPatrimonio.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/views/NewPatrimonio.vue?vue&type=script&lang=js&":
/*!***********************************************************************!*\
  !*** ./resources/js/views/NewPatrimonio.vue?vue&type=script&lang=js& ***!
  \***********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NewPatrimonio_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./NewPatrimonio.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/NewPatrimonio.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NewPatrimonio_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/views/NewPatrimonio.vue?vue&type=template&id=63652e89&":
/*!*****************************************************************************!*\
  !*** ./resources/js/views/NewPatrimonio.vue?vue&type=template&id=63652e89& ***!
  \*****************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NewPatrimonio_vue_vue_type_template_id_63652e89___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./NewPatrimonio.vue?vue&type=template&id=63652e89& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/NewPatrimonio.vue?vue&type=template&id=63652e89&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NewPatrimonio_vue_vue_type_template_id_63652e89___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NewPatrimonio_vue_vue_type_template_id_63652e89___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);