import React, { Component, Fragment } from 'react';

class DtFeatureBox extends Component {

    static slug = 'dt_feature_box';

    render() {
        return (
          <Fragment>
            <h1 className="simp-simple-header-heading">{this.props.heading}</h1>
            <p>
              {this.props.content()}
            </p>
            <p>
              {this.props.type}
            </p>
          </Fragment>
        );
      }
    
}
  
export default DtFeatureBox;