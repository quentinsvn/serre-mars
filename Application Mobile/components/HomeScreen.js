import React, { Component } from 'react'
import { FlatList } from 'react-native';
import { Container, Header, Left, Body, Right, Title, Card, CardItem, Text, Content, H1 } from 'native-base';

export default class HomeScreen extends Component {

    constructor() {
        super(); 
        this.state = {
            data: [],
            datah: [],
            datat: []
        }
    }

    componentDidMount() {
        fetch("https://serre.quentinsavean.fr/api/sensor/dust/pcs/last/")
        .then((result)=>result.json())
        .then((res) => {
            this.setState({
                data:res[0]
            })
        })

        fetch("https://serre.quentinsavean.fr/api/sensor/dht11/humidity/last/")
        .then((resulth)=>resulth.json())
        .then((resh) => {
            this.setState({
                datah:resh[0]
            })
        })

        fetch("https://serre.quentinsavean.fr/api/sensor/dht11/temp/last/")
        .then((resultt)=>resultt.json())
        .then((rest) => {
            this.setState({
                datat:rest[0]
            })
        })
    }

    render() {
        return (
            <Container>
                <Header style={{backgroundColor: "#e84118"}}>
                    <Left/>
                    <Body>
                        <Title>Vue d'ensemble</Title>
                    </Body>
                    <Right />
                </Header>

                <Content style={{marginTop:10, marginLeft: 10, marginRight: 10}}>
                    <Card>
                        <CardItem header>
                            <Text>Capteurs</Text>
                        </CardItem>
                        <CardItem>
                            <Body>
                                <Text>
                                    <H1>2</H1>
                                </Text>
                            </Body>
                        </CardItem>
                    </Card>

                    <Card>
                        <CardItem header>
                            <Text>Poussière</Text>
                        </CardItem>
                        <CardItem>
                            <Body>
                            <FlatList 
                                data={[this.state.data]}
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
                            <Text>Humidité</Text>
                        </CardItem>
                        <CardItem>
                            <Body>
                            <FlatList 
                                data={[this.state.datah]}
                                renderItem={ ({item}) => 
                                <Text>
                                    <H1>{item.humidity}%</H1>
                                </Text>
                                }
                            />
                            </Body>
                        </CardItem>
                    </Card>

                    <Card>
                        <CardItem header>
                            <Text>Température</Text>
                        </CardItem>
                        <CardItem>
                            <Body>
                            <FlatList 
                                data={[this.state.datat]}
                                renderItem={ ({item}) => 
                                <Text>
                                    <H1>{item.temp}°C</H1>
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
