import React from 'react';
import ReactDom from 'react-dom';

class Hello extends React.Component {
    render() {
        return <h1>Hello</h1>
    }
}

ReactDom.render(<Hello/>, document.getElementById('hello'));