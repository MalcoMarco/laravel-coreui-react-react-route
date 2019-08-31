import React, { Component } from 'react';
import { HashRouter, Route, Switch } from 'react-router-dom';
// import { renderRoutes } from 'react-router-config';


const loading = () => <div className="animated fadeIn pt-3 text-center">Loading...</div>;

// Pages
const Example = React.lazy(() => import('./components/Example'));
const User = React.lazy(() => import('./components/usuarios/User'));
const Home = React.lazy(() => import('./components/Home'));
const About = React.lazy(() => import('./components/About'));

class Myroutes extends Component {
    render() {
        return (
            <HashRouter>
                <React.Suspense fallback={loading()}>
                    <Switch>
                        <Route exact path="/about" name="about" render={props => <About  {...props} />} />
                        <Route exact path="/users" name="about" render={props => <User  {...props} />} />
                        <Route exact path="/example" name="example" render={props => <Example {...props} />} />
                        <Route path="/" name="Home" render={props => <Home {...props} />} />
                    </Switch>
                </React.Suspense>
            </HashRouter>
        );
    }
}

export default Myroutes;
