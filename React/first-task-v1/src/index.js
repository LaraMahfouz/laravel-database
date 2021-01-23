import React from 'react';
import ReactDOM from 'react-dom';
import Profile from './profile'
import data from './data'
import './style.css'

class App extends React.Component {
  render(){
    return (
      <div className="container-box">
      {
        data.map((data) => <Profile key={data.id} data={data} />)
      }
      </div>
    );
  };
}

ReactDOM.render(
  <App />,
  document.getElementById('root')
);