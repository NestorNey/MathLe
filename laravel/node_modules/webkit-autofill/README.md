# webkit-autofill

A simple scss file with mixins to styling autofill. More info about autofill in WebKit browsers: [CSS-Tricks](https://css-tricks.com/snippets/css/change-autocomplete-styles-webkit-browsers/)

## Install
In your project install a package:
```
npm install webkit-autofill
```

## Usage
First, import autofill.scss file from node_modules to your .scss / .sass file in project. For example:
```
@import '../../node_modules/webkit-autofill/autofill'
```

Then you can use mixins from autofill.scss. For example:

```
input:-webkit-autofill {
  @include backgroundColorAutoFill(#2196F3);
}
```

## Examples (examples for .scss files)

A default style for autofill in Chrome with examples login data:

![Default style](http://irekrog.pl/files/images/default.png)

### disableAutoFill
![Default style](http://irekrog.pl/files/images/disableAutoFill.png)

```
input:-webkit-autofill {
  @include disableAutoFill;
}
```

### backgroundColorAutoFill(color)
![Default style](http://irekrog.pl/files/images/backgroundColor.png)

```
input:-webkit-autofill {
  ...
  @include backgroundColorAutoFill(#2196F3);
}
```

### textColorAutoFill(color)
![Default style](http://irekrog.pl/files/images/textColor.png)

```
input:-webkit-autofill {
  ...
  @include textColorAutoFill(#FFFFFF);
}
```

### hoverBackgroundColorAutoFill(color)
![Default style](http://irekrog.pl/files/images/hoverBackground.png)

```
input:-webkit-autofill {
  ...
  @include hoverBackgroundColorAutoFill(#FF5722);
}
```

### hoverTextColorAutoFill(color)
![Default style](http://irekrog.pl/files/images/hoverTextColor.png)

```
input:-webkit-autofill {
  ...
  @include hoverTextColorAutoFill(#212121);
}
```