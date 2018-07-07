'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});

var _mjmlCore = require('mjml-core');

var _mjmlCore2 = _interopRequireDefault(_mjmlCore);

var _mjmlValidator = require('mjml-validator');

var _mjmlSocial = require('mjml-social');

var _mjmlNavbar = require('mjml-navbar');

var _mjmlCarousel = require('mjml-carousel');

var _mjmlAccordion = require('mjml-accordion');

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

(0, _mjmlCore.registerComponent)(require('mjml-body'));
(0, _mjmlCore.registerComponent)(require('mjml-head'));
(0, _mjmlCore.registerComponent)(require('mjml-head-attributes'));
(0, _mjmlCore.registerComponent)(require('mjml-head-breakpoint'));
(0, _mjmlCore.registerComponent)(require('mjml-head-font'));
(0, _mjmlCore.registerComponent)(require('mjml-head-preview'));
(0, _mjmlCore.registerComponent)(require('mjml-head-style'));
(0, _mjmlCore.registerComponent)(require('mjml-head-title'));
(0, _mjmlCore.registerComponent)(require('mjml-hero'));
(0, _mjmlCore.registerComponent)(require('mjml-button'));
(0, _mjmlCore.registerComponent)(require('mjml-column'));
(0, _mjmlCore.registerComponent)(require('mjml-divider'));
(0, _mjmlCore.registerComponent)(require('mjml-group'));
(0, _mjmlCore.registerComponent)(require('mjml-image'));

(0, _mjmlCore.registerComponent)(require('mjml-raw'));
(0, _mjmlCore.registerComponent)(require('mjml-section'));
(0, _mjmlCore.registerComponent)(require('mjml-spacer'));
(0, _mjmlCore.registerComponent)(require('mjml-text'));
(0, _mjmlCore.registerComponent)(require('mjml-table'));
(0, _mjmlCore.registerComponent)(require('mjml-wrapper'));

(0, _mjmlCore.registerComponent)(_mjmlSocial.Social);
(0, _mjmlCore.registerComponent)(_mjmlSocial.SocialElement);
(0, _mjmlCore.registerComponent)(_mjmlNavbar.Navbar);
(0, _mjmlCore.registerComponent)(_mjmlNavbar.NavbarLink);
(0, _mjmlCore.registerComponent)(_mjmlAccordion.Accordion);
(0, _mjmlCore.registerComponent)(_mjmlAccordion.AccordionElement);
(0, _mjmlCore.registerComponent)(_mjmlAccordion.AccordionText);
(0, _mjmlCore.registerComponent)(_mjmlAccordion.AccordionTitle);
(0, _mjmlCore.registerComponent)(_mjmlCarousel.Carousel);
(0, _mjmlCore.registerComponent)(_mjmlCarousel.CarouselImage);

(0, _mjmlValidator.registerDependencies)(require('./dependencies'));

exports.default = _mjmlCore2.default;
module.exports = exports['default'];