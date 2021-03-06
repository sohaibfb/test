'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var e = React.createElement;

var myButton = function (_React$Component) {
  _inherits(myButton, _React$Component);

  function myButton(props) {
    _classCallCheck(this, myButton);

    var _this = _possibleConstructorReturn(this, (myButton.__proto__ || Object.getPrototypeOf(myButton)).call(this, props));

    _this.state = { isliked: false };
    return _this;
  }

  _createClass(myButton, [{
    key: 'render',
    value: function render() {
      var _this2 = this;

      if (this.state.isliked) {
        return 'Yes I Really Like This.';
      }

      return e('button', { onClick: function onClick() {
          return _this2.setState({ isliked: true });
        } }, 'Like Button');
    }
  }]);

  return myButton;
}(React.Component);

var domContainer = document.getElementById('reacttest');
ReactDOM.render(e(myButton), domContainer);


