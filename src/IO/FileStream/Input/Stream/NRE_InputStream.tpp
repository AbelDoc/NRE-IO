
    /**
     * @file NRE_InputStream.tpp
     * @brief Implementation of Engine's IO's Object : InputStream
     * @author Louis ABEL
     * @date 11/09/2018
     * @copyright CC-BY-NC-SA
     */

    namespace NRE {
        namespace IO {

            inline std::streampos InputStream::getPosition() {
                return getStream().tellg();
            }

            inline bool InputStream::readLine(Core::String& line) {
                line.clear();
                auto& stream = getStream();

                char current;

                while (!stream.eof() && ((current = static_cast <char> (stream.get())) != '\n')) {
                    line.pushBack(current);
                }

                return stream.operator bool();
            }

            inline void InputStream::seekBegin(size_t offset) {
                getStream().seekg(offset, getStream().beg);
            }

            inline void InputStream::seekEnd(size_t offset) {
                getStream().seekg(offset, getStream().end);
            }
        }
    }
