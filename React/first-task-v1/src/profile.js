// 1 - import react and reactDom
import React from 'react';
import './style.css';

// import { Link } from "react-router-dom";

// 2 - Create React Components //App Function Component
// const Profile =() => {
    class Profile extends React.Component {
        render() {
  return (
    <div class="container">
    <div class="row">
    {/* <div class="col-md-4"> */}
    <div className="wrapper">
      <div className="profile-card ">
          <div className="profile-header">
          <img src={this.props.data.coverImg} alt="" />
          {/* <img src={require("./logo512.png")} /> */}
          </div>
          <div className="profile-body">
                <div className="author-img">
                <img id="preview"  className="img-thumbnail" src={this.props.data.profileImg} alt="" />
                </div>
                <div className="name">{this.props.data.fullName}</div>
                <div className="intro">
                   <p>{this.props.data.description}
                   </p>
                </div>
                <div className="social-icon">
                    <ul>
                        <li>
                            <a href="#"><i className="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#"><i className="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i className="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
          </div>
          <div>
      </div>
      </div>
  </div>  
  {/* </div>   */}
</div>
</div>  
  );
}
}

//  ReactDOM.render(
//     <App />,
//   document.querySelector('#root')
// );
export default Profile;


