import React, { Component } from 'react';
import { FlatList } from 'react-native';
import { Container, Header, Left, Body, Right, Title, Card, CardItem, Text, Content, H1 } from 'native-base';

export default class DustScreen extends Component {
    constructor() {
        super(); 
        this.state = {
            data_pcs: [],
            data_lpop: []
        }
    }

    componentDidMount() {
        fetch("https://serre.quentinsavean.fr/api/sensor/dust/pcs/last/")
        .then((result_pcs)=>result_pcs.json())
        .then((res_pcs) => {
            this.setState({ 
                data_pcs:res_pcs[0]
            })
        })

        fetch("https://serre.quentinsavean.fr/api/sensor/dust/lpop/last/")
        .then((result_lpop)=>result_lpop.json())
        .then((res_lpop) => {
            this.setState({ 
                data_lpop:res_lpop[0]
            })
        })
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
