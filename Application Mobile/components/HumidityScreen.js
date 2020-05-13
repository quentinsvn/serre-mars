import React, { Component } from 'react';
import { FlatList } from 'react-native';
import { Container, Header, Left, Body, Right, Title, Card, CardItem, Text, Content, H1 } from 'native-base';

export default class HumidityScreen extends Component {
    constructor() {
        super(); 
        this.state = {
            data_humidity: [],
            data_temp: []
        }
    }

    componentDidMount() {
        fetch("https://serre.quentinsavean.fr/api/sensor/dht11/humidity/last/")
        .then((result_humidity)=>result_humidity.json())
        .then((res_humidity) => {
            this.setState({ 
                data_humidity:res_humidity[0]
            })
        })

        fetch("https://serre.quentinsavean.fr/api/sensor/dht11/temp/last/")
        .then((result_temp)=>result_temp.json())
        .then((res_temp) => {
            this.setState({ 
                data_temp:res_temp[0]
            })
        })
    }
    render() {
        return (
            <Container>
                <Header style={{backgroundColor: "#e84118"}}>
                    <Left/>
                    <Body>
                        <Title>Humidité</Title>
                    </Body>
                    <Right />
                </Header>

                <Content style={{marginTop:10, marginLeft: 10, marginRight: 10}}>
                    <Card>
                        <CardItem header>
                            <Text>Humidité</Text>
                        </CardItem>
                        <CardItem>
                            <Body>
                            <FlatList 
                                data={[this.state.data_humidity]}
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
                                data={[this.state.data_temp]}
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
