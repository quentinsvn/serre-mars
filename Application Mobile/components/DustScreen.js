import React, { Component } from 'react';
import { FlatList } from 'react-native';
import { Container, Header, Left, Body, Right, Title, Card, CardItem, Text, Content, H1 } from 'native-base';

export default class DustScreen extends Component {

    intervalID;

      state = {
        data_pcs: [],
        data_lpop: []
      }  

    componentDidMount() {
        this.getData_pcs();
        this.getData_lpop();
    }

    componentWillUnmount() {
        clearTimeout(this.intervalID);
    }

    getData_pcs = () => {
        fetch('https://serre.quentinsavean.fr/api/sensor/dust/pcs/last/')
            .then(response => response.json())
            .then(data_pcs => {
                this.setState({ data_pcs: data_pcs[0] });
                this.intervalID = setTimeout(this.getData_pcs.bind(this), 3000);
        });
      }

      getData_lpop = () => {
        fetch('https://serre.quentinsavean.fr/api/sensor/dust/lpop/last/')
            .then(response => response.json())
            .then(data_lpop => {
                this.setState({ data_lpop: data_lpop[0] });
                this.intervalID = setTimeout(this.getData_lpop.bind(this), 3000);
        });
      }
    render() {
        return (
            <Container>
                <Header style={{backgroundColor: "#e84118"}}>
                    <Left/>
                    <Body>
                        <Title>Poussière</Title>
                    </Body>
                    <Right />
                </Header>

                <Content style={{marginTop:10, marginLeft: 10, marginRight: 10}}>
                    <Card>
                        <CardItem header>
                            <Text>Concentration de poussières</Text>
                        </CardItem>
                        <CardItem>
                            <Body>
                            <FlatList 
                                data={[this.state.data_pcs]}
                                renderItem={ ({item}) => 
                                <Text>
                                    <H1>{item.pcs} PCS</H1>
                                </Text>
                            }
                            />
                            </Body>
                        </CardItem>
                    </Card>

                    <Card>
                        <CardItem header>
                            <Text>Taux d'impulsion</Text>
                        </CardItem>
                        <CardItem>
                            <Body>
                            <FlatList 
                                data={[this.state.data_lpop]}
                                renderItem={ ({item}) => 
                                <Text>
                                    <H1>{item.lpo_percentage}%</H1>
                                </Text>
                                }
                                />
                            </Body>
                        </CardItem>
                    </Card>

                </Content>
                
            </Container>
        )
    }
}
